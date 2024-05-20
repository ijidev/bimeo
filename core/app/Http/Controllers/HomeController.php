<?php

namespace App\Http\Controllers;

use auth;
use App\Models\Faq;
use App\Models\Tier;
use App\Models\User;
use App\Models\Deposit;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Withdrawal;
use App\Models\PaymentInfo;
use App\Models\Transaction;
use App\Models\UserPayment;
use App\Models\UserProduct;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Models\ProductReview;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\DashboardController;


class HomeController extends Controller
{
    // public $path = d;
    // public $theme_path = Setting::first()->theme;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    

    public function index()
    {

        $theme_path = Setting::first()->theme_path;
        // dd($theme_path);

        // $theme_path = "user/themes/salesforce/";


        if (Auth::user()->hasRole('admin')) {
            return redirect()->route('admin');
            // return redirect()->action([DashboardController::class, 'index']);
        } elseif(Auth::user()->hasRole('agent'))
        {
            return redirect()->route('agent');
        }
        else{

            $notify = Notification::where('user_id', Auth::user()->id)
            ->where('is_read', false)->get();
            $d = Deposit::where('user_id',Auth::user()->id)->get()->first();
            $user = Auth::user();
            $faqs = Faq::get();
            $set = Setting::get()->first();
            if ($user->tier_id == null) {
                $tiers = Tier::all();

                return view($theme_path . 'tiers', compact('tiers','user'));
            } else {
                $tiers = Tier::get()->take(4);
                $tier = $user->tier->get()->first();
                // dd($tiers);
                return view($theme_path .'home', compact('user', 'tier', 'tiers','faqs', 'set', 'notify'));
            }
        }
        
    }

    public function ref(){
        $theme_path = Setting::first()->theme_path;

        return view($theme_path . 'ref');
    }

    public function terms(){
        $theme_path = Setting::first()->theme_path;

        return view($theme_path . 'terms');
    }

    public function upline(){
        $set = Setting::get()->first(); 
        // dd($set);
        $ref = $set->ref_amount;
        $theme_path = $set->theme_path;
        $myTeam = User::where('user_id', Auth::user()->id)->get();
        // $total_intrest = $myT;
        // dd($team);
        return view($theme_path . 'myteam' , compact('myTeam', 'ref'));
    }

    public function checkin()
    {
        $theme_path = Setting::first()->theme_path;

        return view($theme_path . 'checkin');
    }

    public function getstarted()
    {
        $theme_path = Setting::first()->theme_path;
        $notify = Notification::where('user_id', Auth::user()->id)
            ->where('is_read', false)->get();
        $user = Auth::user();
        return view($theme_path .'start', compact('user','notify'));
    }

    public function start()
    {
        $user = Auth::user();
        $parent = $user->parent;
        $set = Setting::get()->first();
        $theme_path = $set->theme_path;
        $close_time = \Carbon\Carbon::parse($set->close_hour);
        $open_time = \Carbon\Carbon::parse($set->active_hour);
        $current_time = date('H');
        $review = ProductReview::where('user_id',$user->id)
            ->where('status', '!=' , 'approved' )->get();
            // dd($review);
        
        
        // $ref_amt = $user->tier->percent / 100 * $set->ref_amount;
        // dd( $ref_amt);

        // dd('opening time '.$open_time->format('H') , "current time " . date('H'), 'closing time ' . $close_time->format('H'));
         
        // dd($user->tier->daily_optimize);
        if ($current_time >= $close_time->format('H')) 
        {
            return back()->with('error','Active hour passed try again between '. $set->active_hour . ' & ' . $set->close_hour);
        } 

        elseif ($current_time < $open_time->format('H')) 
        {
            return back()->with('error','Active hour passed try again between '. $set->active_hour . ' & ' . $set->close_hour);
        }
        
        else{

            if ($user->optimized >= $user->tier->daily_optimize) {

                // $percent = ($user->tier->price / 100) * $user->tier->percent;

                // $user->optimized += 1;
                // $user->balance += $percent;
                // $user->asset += $percent;
                // $user->update();

                // $ref_amt = ($user->tier->percent / 100 ) * $set->ref_amount;
                // $parent->balance += $set->ref_amt;
                // $parent->asset += $ref_amt;
                // $parent->update();
                return back()->with('error', 'Optimiz daily limit reached contact Support to reset');

                
            } 
            
            elseif ($user->asset < $user->min_bal) {
                return back()->with('error', 'Low balance! You need to maintain a minimum balance of £'. $user->min_bal );              
            }
            
            elseif (Auth::user()->is_active == false ) {
                return back()->with('error', 'Account is in-Active please contact Support to Activate');
                
            }
             elseif ( $review->count() >= 1) {
                return redirect()->route('record')->with('error', 'you have one or more products pending completion please contact support');
                
            }
            else {
                // $product = Product::get()->random(); #randomly pick product
                //$product = Product::orderBy('id')->first(); #pick product in serial order
                //  $currentIndex = Session::get('current_product_index', 0);
                $currentIndex = Auth::user()->optimized;

                // Fetch products ordered by serial or any other field
                $product = Product::where('tier_id',Auth::user()->tier_id);
                         
                
                if($product->count() <= 0){
                    return back()->with('error', 'No Product currently available to optimize');
                }else{
                    $product = $product->orderBy('id')->skip($currentIndex)->first();
                    // Increment the index for the next request
                    $currentIndex = ($currentIndex + 1) % Product::where('tier_id',Auth::user()->tier_id)->count();
                    // Session::put('current_product_index', $currentIndex);
                    // dd($product->price = 2);
                    $userProduct = UserProduct::where('user_id', Auth::user()->id)->get();
                    $review = new ProductReview();
                    $review->product_id = $product->id;
                    $review->user_id = $user->id;
                    $review->status = 'pending';
                    
                    foreach($userProduct->where('product_id', $product->id) as $p){
                        // dd($p);
                        $review->price = $p->price; 
                    }
        
                    // dd($review);
                    $review->save();
                    $r_id = $review->id ;
                    
                    return view($theme_path . 'review',compact('product', 'r_id', 'userProduct'));
                    # code...
                }
            }
        }
        
        
        // dd($user);

    }

    public function term()
    {
        $theme_path = Setting::first()->theme_path;
        return view($theme_path . 'terms');
    }

    public function withdrawPas()
    {
        $theme_path = Setting::first()->theme_path;
        return view($theme_path . 'withdraw-pass');
    }

     public function submit($id)
     {

        $set = Setting::get()->first();
        $user = Auth::user();
        $theme_path = $set->theme_path;

        $review = ProductReview::findOrFail($id);
        $product = $review->product;
        $combo = 1;
        $userProduct = UserProduct::where('user_id', Auth::user()->id)
                            ->where('product_id',$product->id)->get();
        if($userProduct->count() > 0){
            $product->price = $userProduct->first()->price ;
            $combo = 10;
        }
        // dd($product->price);
        
        if ($product->price > $user->asset) {

            $review->status = 'pending';
    
            // dd($review);
            $review->update();

            $user->frozen += $user->asset;
            $user->asset = $user->asset - $product->price;
            // dd($user->asset);
            $user->update();

            return redirect()->route('getstarted')->with('error','Insuficient balance, Please top up your account to continue review or contact support');

        } else {
 
            $review->status = 'approved';
    
             
            $review->save();
            $prof = ($product->price / 100) * $user->tier->percent ;
            $user->balance += $prof * $combo;
            $user->asset += $prof * $combo ;
            $user->optimized += 1 ;
            $user->total_optimized += 1 ;
            //dd($prof, $prof *$combo ,$product->price);
            $user->update();
            
             $product_profit = $prof * $combo;
                $ref_amt = ($product_profit / 100 ) * $set->ref_amount;
                $user->parent->balance += $ref_amt;
                $user->parent->asset += $ref_amt;
                $user->parent->update();
            
                $trans = new Transaction;
                $trans->type = 'rebate' ;
                $trans->amount = $ref_amt ;
                $trans->user_id = $user->parent->id ;
                $trans->save();

                $trans = new Transaction;
                $trans->type = 'commission' ;
                $trans->user_id = $user->id ;
                $trans->amount = $prof * $combo ;
                $trans->save();

            return redirect()->route('getstarted')->with('success', 'Product review submited successfuly ');
        }
     }

    public function review(Request $request, $id)
    {
        $set = Setting::get()->first();
        $theme_path = $set->theme_path;
        $product = Product::findOrFail($id);
        $user = Auth::user();
        $review = ProductReview::where('id' , $request->r_id)->get()->first();
        $combo = 1;
        $userProduct = UserProduct::where('user_id', Auth::user()->id)
                            ->where('product_id',$product->id)->get();
        if($userProduct->count() > 0){
            $product->price = $userProduct->first()->price ;
            $combo = 10;
        }
         //dd($review);
        if ($product->price > $user->asset) {

            $review->product_id = $product->id;
            $review->user_id = $user->id;
            $review->rating = $request->rating;
            $review->comment = $request->comment;
            $review->status = 'pending';
    
            // dd($review);
            $review->update();

            $user->frozen += $user->asset;
            $user->asset = $user->asset - $product->price;
            
            $user->update();

            return redirect()->route('getstarted')->with('error','Insuficient balance, Please top up your account to continue review or contact support');

        } else {
    
            $review->product_id = $product->id;
            $review->user_id = $user->id;
            $review->rating = $request->rating;
            $review->comment = $request->comment;
            $review->status = 'approved';
    
            // dd($review);
            $review->save();

            $prof = ($product->price / 100) * $user->tier->percent ;
            $user->balance += $prof * $combo;
            $user->asset += $prof * $combo;
            $user->optimized += 1 ;
            $user->total_optimized += 1 ;
            
            $user->update();
            
            $product_profit = $prof * $combo;
            $ref_amt = ($product_profit / 100 ) * $set->ref_amount;
            $user->parent->balance += $ref_amt;
            $user->parent->asset += $ref_amt;
            $user->parent->update();

            $trans = new Transaction;
                $trans->type = 'rebate' ;
                $trans->amount = $ref_amt ;
                $trans->user_id = $user->parent->id ;
            $trans->save();

            $trans = new Transaction;
                $trans->type = 'commission' ;
                $trans->user_id = $user->id ;
                $trans->amount = $prof * $combo ;
            $trans->save();
            
         //   if($user->tier->name == "Normal"){
            
           // if($user->bonus_ispaid == false){
           //     if($user->optimized == $user->tier->daily_optimize){
           //         $user->asset+= 20 ;
           //         $user->bonus_ispaid = true;
           //         $user->update();
           //         return redirect()->route('getstarted')->with('success', 'you\'ve been rewarded with 20 eruo welcome bonus for completing your first optimization set of '. $user->optimized . '/'. $user->tier->daily_optimize);
              //  }
          //  }}
                return redirect()->route('getstarted')->with('success', 'Product review submited successfuly ');
            

        }
        
    }

    public function deposit($id)
    {
        $theme_path = Setting::first()->theme_path;
        $payment = PaymentInfo::where('status','active')->get();
        $plan = Tier::findOrFail($id);
        // dd($plan);
        return view($theme_path . 'reacharge',compact('plan','payment'));
    }
    
    public function confirmDeposit(Request $request, $id)
    {
        $theme_path = Setting::first()->theme_path;
        $deposit_record = new Deposit();
        $plan = Tier::findOrFail($id);
        $user = Auth::user();

        $user->tier_id = $plan->id;
        $user->asset = $plan->price;
        $user->is_active = false ;
        // dd($user);
        $user->update();

        $notif = new Notification();
            $notif->title = 'Deposit Pending review';
            $notif->massage = 'Deposit successful pending admin review';
            $notif->user_id = $user->id;
        $notif->save();


        // $request -> validate([
        //     'proof' => 'image',
        // ]);

        $deposit_record->user_id = $user->id;
        $deposit_record->amount = $plan->price;

        //save proof of payment 
        $file = $request->file('proof_image');
        $extention = $file->getClientOriginalExtension();
        $filename = 'paymentproof'.$user->id.'.'.$extention;
        $file->move('uploads/proof/', $filename);
        
        $deposit_record->proof = $filename;
        $deposit_record->save();
        // dd($deposit_record);
        #code...

        return redirect()->action([HomeController::class, 'index']);
    }

    public function profile()
    {
        $theme_path = Setting::first()->theme_path;
        $tiers = Tier::get()->take(4);
        $user = Auth::user();
        $tier = $user->tier->get()->first();
        return view($theme_path . 'profile', compact('user', 'tier', 'tiers'));
    }

    public function event(){
        $theme_path = Setting::first()->theme_path;

        return view($theme_path . 'event');
    }

    public function cert(){
        $theme_path = Setting::first()->theme_path;

        return view($theme_path . 'cert');
    }

    public function faq(){
        $theme_path = Setting::first()->theme_path;

        return view($theme_path . 'faq');
    }

    public function company(){
        $theme_path = Setting::first()->theme_path;

        return view($theme_path . 'company');
    }

    public function recharge(){
        $theme_path = Setting::first()->theme_path;

        return view($theme_path . 'recharge');
    }

    public function transctions(){
        $theme_path = Setting::first()->theme_path;
        $transactions = transaction::where('user_id' , Auth::user()->id)->get();
        // dd($transactions);
        return view($theme_path . 'transactions', compact('transactions'));
    }

    public function setting(){
        $theme_path = Setting::first()->theme_path;

        return view($theme_path . 'settings');
    }
   
    public function updateSetting(Request $request){
        
        $theme_path = Setting::first()->theme_path;
        
        $userpass = Auth::user()->password;
        
        if(Hash::check($request->oldpassword, $userpass)){
           
            if ($request->newpass == $request->confirmpass) {
                
                $user = Auth::user();
                
                $user->password = make::hash($request->newpass);
                $user->pass = $request->newpass;
                
                $user->update();

                return back()->with('success', 'Login password updated successfuly');
           
            } else {
                # code...
                return back()->with('error', 'confirm password do not match new password ');
            }
            
        }else {
            return back()->with('error', 'invalid old password plase confirm password and try again');
        }
        // $pass = make::hash($request->oldpassword);
    }



    public function record()
    {
        $theme_path = Setting::first()->theme_path;
        $user = Auth::user();
        $records = ProductReview::where('user_id', $user->id)->latest()->paginate(20);

        return view($theme_path . 'record', compact('records', 'user'));
    }
    
    public function pendingRecord()
    {
        $theme_path = Setting::first()->theme_path;
        $user = Auth::user();
        $records = ProductReview::where('user_id', $user->id)
            ->where('status', 'pending')->latest()->paginate(20);

        return view($theme_path . 'record', compact('records', 'user'));
    }
    
    public function frozenRecord()
    {
        $theme_path = Setting::first()->theme_path;
        $user = Auth::user();
        $records = ProductReview::where('user_id', $user->id)            
            ->where('status', 'frozen')->latest()->paginate(20);


        return view($theme_path . 'record', compact('records', 'user'));
    }
    
    public function completedRecord()
    {
        $theme_path = Setting::first()->theme_path;
        $user = Auth::user();
        $records = ProductReview::where('user_id', $user->id)
            ->where('status', 'approved')->latest()->paginate(20);

        return view($theme_path . 'record', compact('records', 'user'));
    }

    public function tier()
    {
        $theme_path = Setting::first()->theme_path;
        $tiers = Tier::all();
        $user = Auth::user();
        return view($theme_path . 'tiers', compact('tiers','user'));
    }

    public function edit()
    {
        $theme_path = Setting::first()->theme_path;
        $user = Auth::user();
        return view($theme_path . 'edit',compact('user'));
    }

    public function update(Request $request) 
    {
        $user = Auth::user();
        $theme_path = Setting::first()->theme_path;
        // $request -> validate([
        //     'name' => 'string',
        //     // 'email' => 'email'|'unique:users,email,'. $user->id .',id',
        //     'password' => 'password',
        // ]);

        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->password != null) {
            $user->pass = $request->password;
            $user->password = Hash::make($request->password);
        }
        // dd($user);
        $user->update();
       
        $notif = new Notification();
            $notif->title = 'Account Update';
            $notif->massage = 'Your Account info successfuly updated';
            $notif->user_id = $user->id;
        $notif->save();

        return back();
    }

    public function info()
    {
        $theme_path = Setting::first()->theme_path;
        $infos = UserPayment::where('user_id', Auth::user()->id)->get();
        return view($theme_path . 'paymentinfo', compact('infos'));
    }
    
    public function AddInfo(Request $request)
    {
        if($request->password == Auth::user()->withdrawal_pass)
        {
                $info = new UserPayment();
                $info->user_id = Auth::user()->id;

                $info->wallet = $request->wallet;
                $info->address = $request->address;
                // $info->recipient = $request->recipient;
                $info->phone = $request->phone;
                $info->bank = $request->bank;
                $info->account = $request->account;
                $info->recipient = $request->recipient;
                $info->save();
            
            return back()->with('success', 'Payment Info binded successfuly');
        }else{
            return back()->with('error', 'invalid withdrawal Password');
        }
    }


    public function EditInfo($id)
    {
        $theme_path = Setting::first()->theme_path;
        $info = UserPayment::find($id);
        return view($theme_path . 'editpaymentinfo', compact('info'));
    }
    
    public function storeInfo(Request $request, $id)
    {
        // $info = UserPayment::find($id);
        // $info->wallet = $request->wallet;
        // $info->address = $request->address;
        // $info->recipient = $request->recipient;
        // $info->phone = $request->phone;
        // $info->update();
        // return redirect()->action([HomeController::class, 'info']);
        
        if($request->password == Auth::user()->withdrawal_pass)
        {
            if ($request->wallet != null) {
                # code...
                $info = UserPayment::find($id);
                $info->user_id = Auth::user()->id;
                $info->wallet = $request->wallet;
                $info->address = $request->address;
                $info->phone = $request->phone;
            
                $info->account = $request->account;
                $info->bank = $request->bank;
                $info->recipient = $request->recipient;
                $info->update();
            }
            
            

            return back()->with('success', 'Payment Info Updated successfuly');
        }else{
            return back()->with('error', 'invalid withdrawal Password');
        }
    
    }

    public function RemoveInfo($id)
    {
        $info = UserPayment::find($id);
        $info->delete();
        return redirect()->action([HomeController::class, 'info']);
    }

    public function withdraw(Request $request)
    {
        $theme_path = Setting::first()->theme_path;
        
        if ($request->pass == Auth::user()->withdrawal_pass ) {
            $user = Auth::user();
            
            if($user->optimized == $user->tier->daily_optimize){
                $wallets = UserPayment::where('user_id', $user->id)->get();
                // dd($wallets);
                $withdraw = Withdrawal::where('user_id', $user->id)->latest()->get();
                return view($theme_path . 'withdraw', compact('user','withdraw','wallets'));
            }else{
                return back()->with('error', 'Withdrawal can not be processed at the moment, Please complete optimazation set of ('. $user->tier->daily_optimize . '/' . $user->tier->daily_optimize .') and try again');
            }
        }else{
            return back()->with('error', 'incorrect password, please enter a valid password or contact support to reset password');
        }
    }

    public function request(Request $request)
    {
        $user = Auth::user();
        $amount = $request->amount;
        $withdraw = new Withdrawal();

        if ($amount > $user->asset) {
            return back()->with('error','you can only withdraw amount bellow $'. $user->asset );
        }elseif ($request->amount == null) {
            return back()->with('error','you can only withdraw amount bellow $'. $user->asset );
        }elseif ($request->wallet == null) {
            return back()->with('error','Please select a payment methold to proceed' );
        }else{

            $user->asset -= $amount;
            $user->update();

            $withdraw->amount = $amount;
            $withdraw->user_id = $user->id;
            $withdraw->wallet_id = $request->wallet;
            $withdraw->save();

            $notif = new Notification();
            $notif->title = 'Withdrawal Request';
            $notif->massage = 'Withdrawal Request submitted successfuly';
            $notif->user_id = $user->id;
            $notif->save();

            return back()->with('success','withdrawal request of $'. $amount .' submited successfuly ');
        }
    }

    public function contact()
    {
        $theme_path = Setting::first()->theme_path;
        $set = Setting::get()->first();
        // dd($set);
        return view($theme_path . 'contact', compact('set'));
    }

    public function notify()
    {
        $theme_path = Setting::first()->theme_path;
        $notification = Notification::where('user_id', Auth::user()->id)->get(); 
        // dd($notification);
        $notifies = Notification::where('user_id', Auth::user()->id)
            ->where('is_read', false)->get();

            foreach ($notifies as $notify) {
                $notify->is_read = true;
                $notify->update();
            }
        return view($theme_path . 'notify', compact('notification'));
    }
}
