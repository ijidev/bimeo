@extends('user.themes.bimeo.layouts.base')

@section('content')
 
    </style>
    <div class="container" style="margin-top: 20px;">
        <div class="">
            <div class="card-body" style="padding-bottom:5px;">
                <div class=" my-browser-flex my-browser-flex-nowrap  big-title-font title-font-family big-title-color-home"
                    style="margin-top: 25px;margin-bottom: 30px; color:white">Profile</div>
                    <div class="container" style="margin-top: 10px;">
            <div class="card-body" style="padding-top: 0;padding-bottom: 0;">
                <div class="row">
                    <div class="pl-0 align-self-center" style="margin-left: 20px">
                        
                        <h5 class="mb-1 user-name-text-color" style="color:white;">{{$user->name}}
                           
                            {{-- <img src="{{ asset('bimeoassets/images/m1.png') }}" style="width:20px;height:20px;" alt="" class="mw-100"> --}}
                            <span class="user-name-text-color"style="padding: 2px 10px;border-radius: 10px;margin-top: 10px;text-align: center;background-color:skyblue; color: black;">{{ $user->tier->name}}</span>
                             <img src="{{ $user->tier->icon }}" style="width:20px;height:20px;" alt="" class="mw-100">
                        </h5>
                    </div>
                </div>
            </div>
        </div>
                    
                
                    <div style="width: 140px;flex-wrap: wrap;margin-left: auto;align-content: flex-end;"
                        class="my-browser-flex my-browser-flex-column">
                        <div class="user-name-text-color" style="margin-bottom:0px;width: 100%; color:white;">Credit Score(100%)</div>
                        <progress class="form-control-title-color" max="100" value="{{$user->credit_score}}"
                            style="height: 10px;width: 100%;"></progress>
                    </div>
                </div>
                <div class="" style="margin-top:5px;">
                    <p style="line-height: 20px">
                        <a href="javascript:copy_txt('ETPSZ4');"
                            style="display: inline-block; margin-left: 10px;color: #f2f2f2">
                            <span class="user-name-text-color small">My Referral Code: {{ $user->ref_id }}  </span>
                        </a>
                        <input name="" id="webcopyinput" type="text" style="left: -3000px; position: absolute"
                            value="">
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class=" my-browser-flex my-browser-flex-nowrap my-browser-flex-row my-browser-flex-space-between   profile-my-balance-container-bg profile-group-bg" style="background-color:white;">
        <div class="card-body profile-balance-title-content" style="width: 50%; border-right:1px black solid;">
            <div class=" my-browser-flex my-browser-flex-nowrap  text-center">
                <div class="col"  style="text-align: center; color:skyblue;">
                    <p class="profile-my-balance-title" style="margin-top: 6px;  color:black;">Total Commission</p>
                    <div class="mb-0 font-weight-normal my-browser-flex-item-value-color" style="color:black;">{{$user->balance}}USD </div>
                    
                </div>
            </div>
        </div>
        <div class="content-v-line" style="width: 1px;height: 80px;margin-top: 10px;"></div>
        <div class="card-body profile-balance-title-content" style="width: 50%; border-left:1px black solid;">
            <div class=" my-browser-flex my-browser-flex-nowrap  text-center">
                <div class="col"  style="text-align: center">
                     <p class="profile-my-balance-title" style="margin-top: 8px; color:black;">Asset</p>
                    <div class="mb-0 font-weight-normal my-browser-flex-item-value-color" style="color:black;">{{$user->asset}} USD </div>
                   
                </div>
            </div>
        </div>
    </div>

    {{-- <div class=" my-browser-flex my-browser-flex-nowrap my-browser-flex-row my-browser-flex-space-between   profile-my-balance-container-bg-2 profile-group-bg profile-balance-title-content"
        style="flex-direction: column;justify-content: normal; background-color:white; color:skyblue;">
        <div style="padding-top: 15px;padding-left: 20px;padding-bottom:5px;font-size: 20px;color:skyblue">Invite Friends</div>
        <div style="padding-bottom: 20px;padding-left: 20px;color: skyblue;">Share to your friends and win more!</div>
    </div> --}}

    <div class="" style="margin-top: 30px;">
        <div class=" my-browser-flex my-browser-flex-nowrap  ele-space-between" style="margin-bottom: 10px;">
            <a href="{{route('record')}}" class=" text-center my-actin-icon">
                <div class="avatar form-group-bg" style="border-radius:10px;padding: 15px;">
                    <img src="{{asset('bimeoassets/images/my_records.png')}}" class="avatar-30">
                </div>
                <p class="small mt-2">Tasks History</p>
            </a>
            <a href="{{route('upline')}}" class=" text-center my-actin-icon">
                <div class="avatar form-group-bg" style="border-radius:10px;padding: 15px;">
                    <img src="{{asset('bimeoassets/images/my_team.png')}}  " class="avatar-30">
                </div>
                <p class="small mt-2">My Team</p>
            </a>
            <a href="{{ route('withdraw.pas') }}" class=" text-center my-actin-icon">
                <div class="avatar form-group-bg" style="border-radius:10px;padding: 15px;">
                    <img src="{{asset('bimeoassets/images/home_withdraw.png')}}" class="avatar-30">
                </div>
                <p class="small mt-2">Withdraw</p>
            </a>
        </div>
        <div class=" my-browser-flex my-browser-flex-nowrap  ele-space-between" style="">
            <a href="{{ route('setting') }}" class=" text-center my-actin-icon">
                <div class="avatar form-group-bg" style="border-radius:10px;padding: 15px;">
                    <img src="{{asset('bimeoassets/images/home_security.png')}}" class="avatar-30">
                </div>
                <p class="small mt-2">Security</p>
            </a>
            <a href="{{ route('transctions') }}" class=" text-center my-actin-icon">
                <div class="avatar form-group-bg" style="border-radius:10px;padding: 15px;">
                    <img src="{{asset('bimeoassets/images/my_transactions.png')}}" class="avatar-30">
                </div>
                <p class="small mt-2">Transactions</p>
            </a>
            <a href="{{ route('contact') }}" class=" text-center my-actin-icon">
                <div class="avatar form-group-bg" style="border-radius:10px;padding: 15px;">
                    <img src="{{asset('bimeoassets/images/my_contact_us.png')}}" class="avatar-30">
                </div>
                <p class="small mt-2">Contact Us</p>
            </a>
        </div>
        <div class=" my-browser-flex my-browser-flex-nowrap  ele-space-between" style="margin-bottom: 10px;">
            <a href=" {{ route('info') }} " class=" text-center my-actin-icon">
                <div class="avatar form-group-bg" style="border-radius:10px;padding: 15px;">
                    <img src="{{asset('bimeoassets/images/my_link_bank.png')}}" class="avatar-30">
                </div>
                <p class="small mt-2">Bind Wallet</p>
            </a>
            <a href="{{route('logout.check')}}" class=" text-center my-actin-icon tabs_btn1">
                <div class="avatar form-group-bg" style="border-radius:10px;padding: 15px;">
                    <img src="{{asset('bimeoassets/images/my_logout.png')}}" class="avatar-30">
                </div>
                <p class="small mt-2">Logout</p>
            </a>
           <a href=" " class=" text-center my-actin-icon">
                <div class="avatar form-group-bg" style="border-radius:10px;padding: 15px;">
                    <img src="{{asset('bimeoassets/images/msg.png')}}" class="avatar-30">
                </div>
                <p class="small mt-2">Sound Settings</p>
            </a> 
            
        </div>
    </div>
    <div style="height: 20px;"></div>
@endsection