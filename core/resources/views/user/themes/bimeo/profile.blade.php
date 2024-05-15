@extends('user.themes.bimeo.layouts.base')

@section('content')
    <div class="container" style="margin-top: 50px;">
        <div class="">
            <div class="card-body" style="padding-bottom:5px;">
                <div class=" my-browser-flex my-browser-flex-nowrap  big-title-font title-font-family big-title-color-home"
                    style="margin-top: 25px;margin-bottom: 30px;">Profile</div>
                <div class=" my-browser-flex my-browser-flex-nowrap  align-content-center">
                    <div class="pl-0">
                        <h5 class="mb-1 user-name-text-color" style="margin-top: 10px;">
                            <img src="{{ $user->tier->icon }}" style="" alt=""
                                class="mw-100 home-level-icon-size">
                        </h5>
                    </div>
                    <div style="margin-left: 10px">
                        <h5 class="mb-1 big-title-font user-name-text-color">{{$user->name}}</h5>
                        <div class="my-level-bg user-name-text-color"
                            style="padding: 2px 10px;border-radius: 10px;margin-top: 10px;text-align: center; color: blue;">
                            {{ $user->tier->name }}
                        </div>
                    </div>
                    <div style="width: 140px;flex-wrap: wrap;margin-left: auto;align-content: flex-end;"
                        class="my-browser-flex my-browser-flex-column">
                        <div class="user-name-text-color" style="margin-bottom: 8px;width: 100%;">Credit Score(100%)</div>
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
    <div class=" my-browser-flex my-browser-flex-nowrap my-browser-flex-row my-browser-flex-space-between   profile-my-balance-container-bg profile-group-bg">
        <div class="card-body profile-balance-title-content" style="width: 50%">
            <div class=" my-browser-flex my-browser-flex-nowrap  text-center">
                <div class="col"  style="text-align: center">
                    <div class="mb-0 font-weight-normal my-browser-flex-item-value-color">{{$user->balance}}USD </div>
                    <p class="profile-my-balance-title" style="margin-top: 6px">Total Commission</p>
                </div>
            </div>
        </div>
        <div class="content-v-line" style="width: 1px;height: 80px;margin-top: 10px;"></div>
        <div class="card-body profile-balance-title-content" style="width: 50%">
            <div class=" my-browser-flex my-browser-flex-nowrap  text-center">
                <div class="col"  style="text-align: center">
                    <div class="mb-0 font-weight-normal my-browser-flex-item-value-color">{{$user->asset}} USD </div>
                    <p class="profile-my-balance-title" style="margin-top: 8px">Asset</p>
                </div>
            </div>
        </div>
    </div>
    <div class=" my-browser-flex my-browser-flex-nowrap my-browser-flex-row my-browser-flex-space-between   profile-my-balance-container-bg-2 profile-group-bg profile-balance-title-content"
        style="flex-direction: column;justify-content: normal" hidden="hidden">
        <div style="padding-top: 15px;padding-left: 20px;padding-bottom:5px;font-size: 20px;">Invite Friends</div>
        <div style="padding-bottom: 20px;padding-left: 20px;color: #f2f2f2;">Share to your friends and win more!</div>
    </div>
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
            {{-- <a href="{{ route('setting') }}" class=" text-center my-actin-icon">
                <div class="avatar form-group-bg" style="border-radius:10px;padding: 15px;">
                    <img src="{{asset('bimeoassets/images/msg.png')}}" class="avatar-30">
                </div>
                <p class="small mt-2">Sound Settings</p>
            </a> --}}
            <a href="{{route('logout')}}" class=" text-center my-actin-icon tabs_btn1">
                <div class="avatar form-group-bg" style="border-radius:10px;padding: 15px;">
                    <img src="{{asset('bimeoassets/images/my_logout.png')}}" class="avatar-30">
                </div>
                <p class="small mt-2">Logout</p>
            </a>
        </div>
    </div>
    <div style="height: 20px;"></div>
@endsection