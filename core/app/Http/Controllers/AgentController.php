<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Tier;
use App\Models\User;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Withdrawal;
use Laratrust\Models\Role;
use App\Models\UserProduct;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AgentController extends Controller
{
    public function index(){
        $users = User::where('user_id', Auth::user()->id)->get();
        $withdraw = Withdrawal::get();
        
        return view('agent.users',compact('users','withdraw'));
    }

    public function view($id)
    {
        $tiers = Tier::all();
        $user = User::find($id);
        $withdraw = Withdrawal::where('user_id', $user->id)->get()->sum('amount');
        // dd($withdraw);
        // $info = UserPayment::where('user_id', $user->id)->first();
        return view('agent.user',compact('user','tiers','withdraw'));
    }

    public function loginform(){
        return view('agent.auth.login');
    }

    public function registerform(){
        return view('agent.auth.register');
    }

    public function signup(Request $data)
    { 
        $data->validate([
            'name' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'ref_code' => ['nullable', 'exists:users,ref_id']
        ],
        [
            'ref_code.exists' => 'invalid ref_code, No user with this member id.'
        ]);
        if($data['ref_code'] != null){
            $parent = User::where('ref_id', $data['ref_code'])->first();
            $parent = $parent->id ;
        }else{
            $parent = null ;
        }
        // dd(Role::all());
        
        $tier = Tier::where('name', 'Normal')->get()->first();
        $uniqueCode = Str::random(6);

        // Make sure the generated code is unique
        while (User::where('withdrawal_pass', $uniqueCode)->exists()) {
            $uniqueCode = Str::random(6);
        }
        // dd($tier);
            
        $user = User::create([
            'name' => $data['name'],
            'username' => $data['name'],
            'type' => 'agent',
            'user_id' => $parent,
            'ref_id' => $uniqueCode,
            'tier_id' => $tier->id,
            'pass' => $data['password'],
            'gender' => $data['gender'],
            // 'withdrawal_pass' => $data['withdrawal_password'],
            'password' => Hash::make($data['password']),
        ]);
        dd($user);
        $user->addRole('agent');
        // $user = $user->update([
        //     'ref_id' => 'ref_'. 0 .$user->id
        // ]);
        return redirect()->route('agent.login')->with('success','Account created Now login with registerd account details.');
    }
}