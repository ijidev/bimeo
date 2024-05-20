<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Tier;
use App\Models\User;
use App\Models\Deposit;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Withdrawal;
use Laratrust\Models\Role;
use App\Models\UserPayment;
use App\Models\UserProduct;
use Illuminate\Support\Str;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Models\ProductReview;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index()
    {
        $user = User::get();
        $active = $user->where('is_active' , true)->count();
        $inactive = $user->where('is_active' , false)->count();
        $withdraws = Withdrawal::where('status','pending')->get();
        return view('admin.dashboard', compact('user','active','inactive','withdraws'));
    }

    public function users()
    {
        $users = User::where('type', 'user')->get();
        $withdraw = Withdrawal::get();
        // dd($withdraw);
        return view('admin.users',compact('users','withdraw'));
    }

    public function agent()
    {
        $users = User::where('type', 'agent')->get();
        $downline = User::get();
        // dd($users);
        $withdraw = Withdrawal::get();
        return view('admin.agent',compact('users','withdraw','downline'));
    }

    public function viewagent($id)
    {
        $user = User::find($id);
        $downlines = User::where('user_id', $user->id)->get();
        // $downline = User::get();
        // dd($users);
        $withdraw = Withdrawal::get();
        return view('admin.view_agent',compact('user','withdraw','downlines'));
    }

    public function user($id)
    {
        $tiers = Tier::all();
        $user = User::find($id);
        $withdraw = Withdrawal::where('user_id', $user->id)->get()->sum('amount');
        // dd($withdraw);
        $info = UserPayment::where('user_id', $user->id)->first();
        return view('admin.user',compact('user','tiers', 'info','withdraw'));
    }
    
    public function bindproduct(Request $request)
    {
        $prod = Product::find($request->productId);
        $userProduct = UserProduct::where('product_id', $prod->id)
                    ->where('user_id', $request->userId)->get();
         
        if($userProduct->count() > 0){
            // dd("product exist");
            
            $product = UserProduct::findOrFail($userProduct->first()->id);
            
            $product->product_id = $prod->id;
            $product->user_id = $request->userId;
            if($request->price !== null){
                $product->price = $request->price;
            }else{
                $product->price = $prod->price;
            }
            $product->update();
            return back()->with('success',$product->product->name .' Updated successfuly');
            
        }else{
            // dd("product do not exist");
            $product = new UserProduct();
            $product->product_id = $prod->id;
            $product->user_id = $request->userId;
            if($request->price != null){
                $product->price = $request->price;
            }else{
                $product->price = $prod->price;
            }
            // dd($product);
            $product->save();
            return back()->with('success',$product->product->name .' Binded to user successfuly');
        }
    }
    
    public function userProduct($id)
    {
        $user = User::findOrFail($id);
        $products = Product::where('tier_id', $user->tier->id)->get();
        $userProducts = UserProduct::where('user_id', $user->id)->get();
        return view('admin.user_product',compact('products','userProducts','user'));
    }
    
    public function deleteUserProduct($id)
    {
        $product = UserProduct::findOrFail($id);
        $product->delete();
        return back()->with('success', $product->product->name . ' unasigned from user'); 
    }

    public function fund($id, Request $request)
    {
        $user = User::find($id);
        if($request->select == 'credit')
        {
            // dd($request->all(), $user);
            
            If($user->asset < 0){
               $user->frozen += $request->amount;
               $user->total_recharge += $request->amount;
               
              if($user->asset + $request->amount >= 0){
                $user->asset = 0;
              }else{
                $user->asset += $request->amount ;
              }
              $user->update();
            }
           
            else{
              $user->asset += $request->amount;
              $user->total_recharge += $request->amount;
              $user->update();
            }

            $notif = new Notification();
            $notif->title = 'Account Recharged';
            $notif->massage = 'Your Account has been recharged with $'.$request->amount;
            $notif->user_id = $user->id;
            $notif->save();

            return back()->with('success', 'User Balance toped up with $'. $request->amount);
        }
        
        if($request->select == 'debit')
        {
            $user->asset -= $request->amount;
            $user->update();

            $notif = new Notification();
            $notif->title = 'Account Debited';
            $notif->massage = 'Your Account has been Debit with $'.$request->amount;
            $notif->user_id = $user->id;
            $notif->save();

            return back()->with('success', 'User Balance debited with $'. $request->amount);
        }

        if($request->select == 'freez')
        {
            if ($user->asset >= $request->amount) {
                $user->asset -= $request->amount;
                $user->frozen += $request->amount;
                $user->update();

                $notif = new Notification();
                $notif->title = 'Asset Frozen';
                $notif->massage = '$'.$request->amount . ' of your asset frozen';
                $notif->user_id = $user->id;
                $notif->save();

                return back()->with('success', ' $'. $request->amount . ' freezed from user Balance Successfuly');
            } else {
                return back()->with('error', 'user balance lesser than $'. $request->amount . ' please enter an ammount not more than $'.$user->asset);
                
            }
            
        }
        if($request->select == 'unfreez')
        {
            if ($user->frozen >= $request->amount) {
                $user->frozen -= $request->amount;
                $user->asset += $request->amount;
                $user->update();

                $notif = new Notification();
                $notif->title = 'Asset Unfreezed';
                $notif->massage = '$'.$request->amount . ' of frozen asset unfrozed and moved to your balance';
                $notif->user_id = $user->id;
                $notif->save();

                return back()->with('success', ' $'. $request->amount . ' unfreezed to user Balance Successfuly');
            } else {
                return back()->with('error', 'user frozen balance lesser than $'. $request->amount . ' please enter an amount not more than $'.$user->frozen);
                
            }
            
        }
    }

    public function updateUser($id, Request $request)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->username = $request->name;
        $user->email = $request->email;
        if ($request->password != null) {
            $user->pass = $request->password;
            $user->password = Hash::make($request->password);
        }
        $user->min_bal = $request->min_bal;
        $user->withdrawal_pass = $request->withdrawal_pass;
        $user->tier_id = $request->tier;
        $user->gender = $request->gender;
        $user->credit_score = $request->score;
        $user->is_active = $request->status;
        $user->update();
        return back();
    }
    
    public function updateUserPayment($id, Request $request)
    {
        if($request->new)
        {
            $info = new UserPaymen();
            $info->user_id = $id;
            $info->wallet = $request->wallet;
            $info->address = $request->address;
            $info->recipient = $request->recipient;
            $info->phone = $request->phone;
            $info->save();
            return back();
        }
        $info = UserPayment::find($id);
        $info->wallet = $request->wallet;
        $info->address = $request->address;
        $info->recipient = $request->recipient;
        $info->phone = $request->phone;
        $info->update();
        return back();
    }

    public function resetUser($id)
    {
        $user = User::find($id);

        $user->optimized = 0;
        $user->reset_count += 1;
        if($user->reset_count == $user->tier->reset + 1){
            $user->reset_count = 1 ;
        }
        $user->update();
        return back();
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return back();
    }

    public function withdraw()
    {
        $withdraws = Withdrawal::latest()->get();
        return view('admin.withdrawal', compact('withdraws'));
    }

    public function approve($id)
    {
        $withd = Withdrawal::find($id);
        $withd->status = 'approved';
        $withd->update();

        $notif = new Notification();
        $notif->title = 'Withdrawal Request Approved';
        $notif->massage = 'Your Withdrawl Request has been appeoved successfuly fund will arive in your provided wallet address soon.';
        $notif->user_id = $withd->user->id;
        $notif->save();

        return back();
    }
    
    public function decline($id)
    {
        $withd = Withdrawal::find($id);
        $withd->status = 'declined' ;
        $withd->user->asset += $withd->amount;
        $withd->user->update();
        // dd($withd->user->asset,$withd->amount );
        $withd->update();
        return back();
    }

    public function deposit()
    {
        $deposits = Deposit::latest()->get();
        // dd($deposits);
        return view('admin.deposit', compact('deposits'));
    }

    public function viewdeposit($id)
    {
        $item = Deposit::find($id);
        // dd($deposits);
        return view('admin.edit-deposit', compact('item'));
    }

    public function approveDeposit($id)
    {
        
        
        $deposit = Deposit::find($id);
        $deposit->is_approved = true;
        $deposit->update();
        $deposit->user->is_active = true;
        if ($deposit->user->credit_score == 0) {
            $deposit->user->credit_score = 100;
        }
       // $deposit->user->ref_id = $uniqueCode;
        $deposit->user->update();

        $notif = new Notification();
        $notif->title = 'Deposit Request Approved';
        $notif->massage = 'Your deposit Request has been appeoved successfuly and your account is now active. Now you can start optimizing to make profit.';
        $notif->user_id = $deposit->user->id;
        $notif->save();

        return back()->with('success', 'Deposit approved, user account set to active');
    }

    public function settings()
    {
        $setting = Setting::get();
        // if ($setting->count() < 1) {
        //     $set = '';
        // } else {
            $set = $setting->first();
        // }
        // dd($set);
        return view('admin.settings', compact('set','setting'));
    }

    public function updateSetting(Request $request)
    {
        $setting = Setting::get();

        if ($setting->count() < 1) {
            $set = new Setting();
            $set->active_hour = $request->open;
            $set->close_hour = $request->close;
            $set->min_withdrawal = $request->amount;
            $set->ref_amount = $request->ref;
            $set->term = $request->terms;
            $set->chat = $request->chat;
            $set->about = $request-about;
            // dd($set);
            $set->save();
        } else {
            $set = $setting->first();
            $set->active_hour = $request->open;
            $set->close_hour = $request->close;
            $set->min_withdrawal = $request->amount;
            $set->ref_amount = $request->ref;
            $set->chat = $request->chat;
            $set->term = $request->terms;
            $set->about = $request->about;
            //save certificate
            If($request->cert){
              $file = $request->file('cert');
              $extention = $file->getClientOriginalExtension();
              $filename = 'certificate_'. time() .'.'.$extention;;     
              $path = 'uploads/certificate/' ;
              $file->move($path, $filename);
              $set->cert = $path . $filename;
            }
            
            //save Letter of Authorization
            If($request->letter){
              $file = $request->file('letter');
              $extention = $file->getClientOriginalExtension();
              $filename = 'L-of-A_'. time() .'.'.$extention;;     
              $path = 'uploads/certificate/' ;
              $file->move($path, $filename);
              $set->letter = $path . $filename;
            }
            
            // dd($set);
            $set->update();
        }
        
        return back()->with('success','settings updated successfuly');
    }

    public function appReview()
    {
        $products = ProductReview::get();
        // dd($products);
        return view('admin.review', compact('products'));
    }

    public function editReview($id)
    {
        $product = ProductReview::find($id);
        return view('admin.app-review', compact('product'));
    }

    public function approveReview(Request $request , $id)
    {
        $product = ProductReview::find($id);
        $product->status = $request->status;
        $product->update();
        return back()->with('success', 'Product Review status updated Successfully');
    }

    public function apps()
    {
        $tiers = Tier::get();
        $apps = Product::all();
        return view('admin.apps',compact('apps','tiers'));
    }

    public function createApp()
    {
        return view('admin.create-app');
    }

    public function editApp($id)
    {
        $tiers = Tier::get();
        $app = Product::findOrFail($id);
        return view('admin.edit-app',compact('app','tiers'));

    }

    public function deleteApp($id)
    {
        $app = Product::findOrFail($id);

        foreach ($app->review as $review) {
            $review->delete();
        }

        $app->delete();
        return back(); 
    }

    public function updateApp(Request $request, $id)
    {
        $app = Product::findOrFail($id);

        $app->name = $request->name;
        $app->price = $request->price;
        $app->profit = $request->profit;
        
        if ($request->has('tier')) {
          $app->tier_id = $request->tier ;
        }
        if ($request->has('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = $request->name.'.'.$extention;
            $path = 'uploads/product/' ;
            $file->move($path, $filename);
    
            $app->img = $path . $filename;
        }

        // dd($app);

        $app->save();
        
        return redirect()->route('apps');
    }

    public function storeApp(Request $request)
    {
        $app = new Product();
        $app->name = $request->name;
        $app->price = $request->price;
        $app->profit = $request->profit;
        $app->tier_id = $request->tier;
        
        $file = $request->file('image');
        $extention = $file->getClientOriginalExtension();
        $filename = $request->name.'.'.$extention;
        $path = 'uploads/product/' ;
        $file->move($path, $filename);

        $app->img = $path . $filename;

        // dd($app);

        $app->save();
        
        return redirect()->route('apps');
    }

    public function plans()
    {
        $plans  = Tier::get();
        return view('admin.tier', compact('plans'));
    }

    public function addplan(Request $request)
    {
        $plan  = new Tier();
        $plan->name = $request->name;
        $plan->price = $request->price;
        $plan->percent = $request->percent;
        $plan->daily_optimize = $request->optimize;

        $file = $request->file('icon');
        $extention = $file->getClientOriginalExtension();
        $filename = $request->name.'.'.$extention;
        $path = 'uploads/icon/' ;
        $file->move($path, $filename);

        $plan->icon = $path . $filename;
        // dd($plan);
        $plan->save();
        return back()->with('success','successfully created');
    }

    public function editplan( $id)
    {
        $plan  = Tier::find($id);

        return view('admin.editplan', compact('plan'));
    }

    public function updateplan(Request $request, $id)
    {
        $plan  = Tier::find($id);

        $plan->price = $request->price;
        $plan->percent = $request->percent;
        $plan->daily_optimize = $request->optimize;

        $plan->update();
        return back()->with('success','successfully created');
    }

    public function faq()
    {
        $faqs = Faq::get();
        return view('admin.faq' ,compact('faqs'));
    }

    public function editfaq($id)
    {
        $faq = Faq::find($id);
        return view('admin.editfaq' ,compact('faq'));
    }

    public function updatefaq(Request $request ,$id)
    {
        $faq = Faq::find($id);
        $faq->question = $request->question;
        $faq->answer = $request->ans;
        $faq->update();
        return redirect()->route('faq')->with('success', 'FAQ Updated successfuly');
    }

    public function deletefaq($id)
    {
        $faq = Faq::find($id);
        $faq->delete();
        return back()->with('success','Faq Deleted');
    }

    public function addfaq(Request $request)
    {
        $faq = new faq();

        $faq->question = $request->question;
        $faq->answer = $request->ans;
        $faq->save();

        return back()->with('success', 'Faq Created Successfuly');
    }
}