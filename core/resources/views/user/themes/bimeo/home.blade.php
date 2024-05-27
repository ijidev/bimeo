@extends('user.themes.bimeo.layouts.base')
@section('head')
{{-- <link rel="stylesheet" href="{{ asset('frontassets/style.css') }}"> --}}
<link rel="stylesheet" href="{{ asset('frontassets/login.css') }}">
@endsection
@section('content')
    <div class="" style="margin-top: 90px">
        <div style="">
            <div style="width: 30px;position: relative;display: inline;float: left;z-index: 8;background: 0;">
                <img src="{{ asset('bimeoassets/images/ling.png')}}"
                    style="margin-left: 10px;margin-right: 20px; width: 20px;height: 20px;z-index: 8">
            </div>
            <div style="margin-left: 20px;z-index: 7" class="run-container right-color">
                <div style="z-index: 7" class="run-container-text">
                    Dear {{$user->name}},kindly participate in our latest event for more exclusive
                    rewards! Please contact our customer service to find out more!
                </div>
            </div>
        </div>
        <div class="video">
            <video height="240px" width="100%" autoplay="autoplay" loop="loop" muted="muted">
                <source src=" {{ asset('bimeoassets/images/bimeo.mp4') }}" type="video/mp4">
            </video>
        </div>
        <br>
        <div class="container" style="margin-top: 10px;">
            <div class="card-body" style="padding-top: 0;padding-bottom: 0;">
                <div class="row">
                    <div class="pl-0 align-self-center" style="margin-left: 20px">
                        <p style="margin-top: 10px;margin-bottom: 10px; color: white;"
                            class="big-title-color-home title-font-family ">Welcome</p>
                        <h5 class="mb-1 user-name-text-color">{{$user->name}}
                            <img src="{{ $user->tier->icon }}" style="width:20px;height:20px;" alt="" class="mw-100">
                            {{-- <img src="{{ asset('bimeoassets/images/m1.png') }}" style="width:20px;height:20px;" alt="" class="mw-100"> --}}
                            <span class="user-name-text-color">{{ $user->tier->name}}</span>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
        <video height="240px" width="100%" autoplay="autoplay" loop="loop" muted="muted" hidden="hidden">
            <source src="/static_catalog/img/home_start.mp4" type="video/mp4">
        </video>
    </div>
    <div class="" style="margin-top: 20px;">
        <div class=" my-browser-flex my-browser-flex-nowrap  ele-space-between">
            <a href="{{ route('event') }}" class=" text-center actin-icon">
                <div class="avatar form-group-bg form-group-bg-shadow" style="border-radius:10px;padding: 15px;">
                    <img src="{{ asset('bimeoassets/images/my_event.png') }}" class="avatar-30">
                </div>
                <p class="small mt-2">Events</p>
            </a>
            <a href="{{ route('recharge') }}" class=" text-center actin-icon">
                <div class="avatar form-group-bg form-group-bg-shadow" style="border-radius:10px;padding: 15px;">
                    <img src="{{ asset('bimeoassets/images/home_recharge.png')}}" class="avatar-30">
                </div>
                <p class="small mt-2">Recharge</p>
            </a>
            <a href="{{ route('withdraw.pas') }}" class=" text-center actin-icon">
                <div class="avatar form-group-bg form-group-bg-shadow" style="border-radius:10px;padding: 15px;">
                    <img src="{{ asset('bimeoassets/images/home_withdraw.png')}}" class="avatar-30">
                </div>
                <p class="small mt-2">Withdrawal</p>
            </a>
            <a href="{{ route('ref') }}" class="text-center actin-icon">
                <div class="avatar form-group-bg form-group-bg-shadow" style="border-radius:10px;padding: 15px;">
                    <img src="{{ asset('bimeoassets/images/home_invit.png') }}" class="avatar-30">
                </div>
                <p class="small mt-2">Referal</p>
            </a>
        </div>
        <div class=" my-browser-flex my-browser-flex-nowrap  ele-space-between" style="margin-top: 35px;">
            <a href="{{ route('company') }}" class="text-center actin-icon">
                <div class="avatar form-group-bg form-group-bg-shadow" style="border-radius:10px;padding: 15px;">
                    <img src="{{ asset('bimeoassets/images/home_term.png') }}" class="avatar-30">
                </div>
                <p class="small mt-2">Company</p>
            </a>
            <a href="{{route('terms')}}" class="text-center actin-icon">
                <div class="avatar form-group-bg form-group-bg-shadow" style="border-radius:10px;padding: 15px;">
                    <img src="{{ asset('bimeoassets/images/home_agent.png') }}" class="avatar-30">
                </div>
                <p class="small mt-2">T&amp;C</p>
            </a>
            <a href="{{ route('faqs') }}" class="text-center actin-icon">
                <div class="avatar form-group-bg form-group-bg-shadow" style="border-radius:10px;padding: 15px;">
                    <img src="{{ asset('bimeoassets/images/home_faq.png') }}" class="avatar-30">
                </div>
                <p class="small mt-2">FAQs</p>
            </a>
            <a href="{{ route('cert') }}" id="certModalBtn" class="text-center actin-icon">
                <div class="avatar form-group-bg form-group-bg-shadow" style="border-radius:10px;padding: 15px;">
                    <img src="{{ asset('bimeoassets/images/home_rule.png') }}" class="avatar-30">
                </div>
                <p class="small mt-2">Certificates</p>

            </a>
        </div>
    </div>
    <div class="home-title-text-color">
        <h6 class="container subtitle" style="text-transform: none;color: white;">Membership level</h6>
       
        {{-- <div class="level-block form-group-bg" data-text="0" id="level_0" style="">
            <div class="">
                <div class="row" style="margin-top: 5px;">
                    <div class="col-auto pr-0" style="">
                        <img src="assets/images/m1.png" alt="" class="home-level-icon-size" style="">
                    </div>
                    <div class="col align-self-center">
                        <h5 class="mb-2 font-weight-normal" style="margin-top: 3px;">
                            <!--                        <span style="float: left" class="form-control-title-color">Vip1</span>-->
                            <span style="float: left;margin-left: 0;font-size: 16px;" class="home-member-text-color">VIP
                                1&nbsp;</span>
                            <span class="home-level-percent-text" style="float: left;font-size: 16px;">Member</span>
                            <span class="home-level-percent-text"
                                style="font-size: 16px;float: left;margin-left: 10px;float: right">0.80%</span>
                            <div style="clear: both">
                            </div>
                        </h5>
                    </div>
                </div>
            </div>
        </div> --}}

        @foreach ($tiers as $tier)
            
            <div class="level-block form-group-bg" data-text="0" id="level_0" style="">
                <div class="">
                    <div class="row" style="margin-top: 5px;">
                        <div class="col-auto pr-0" style="">
                            <img src="{{ $tier->icon }}" alt="" class="home-level-icon-size" style="">
                            {{-- <img src="{{ asset('bimeoassets/images/m2.png') }}" alt="" class="home-level-icon-size" style=""> --}}
                        </div>
                        <div class="col align-self-center">
                            <h5 class="mb-2 font-weight-normal" style="margin-top: 3px;">
                                <!--                        <span style="float: left" class="form-control-title-color">Vip1</span>-->
                                <span style="float: left;margin-left: 0;font-size: 16px;" class="home-member-text-color">{{ $tier->name }} </span>
                                <span class="home-level-percent-text" style="float: left;font-size: 16px;"> Member</span>
                                <span class="home-level-percent-text"
                                    style="font-size: 16px;float: left;margin-left: 10px;float: right">{{ $tier->percent .'%'}}</span>
                                @if ($tier->id == $user->tier->id)
                                    
                                @else
                                    <img src="{{('bimeoassets/images/home_lock.png')}}" alt="" class="" style="height: 20px;float: right;">
                                @endif
                                    
                                <div style="clear: both">
        
                                </div>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    
        {{-- <div class="level-block form-group-bg" data-text="2" id="level_2" style="">
            <div class="">
                <div class="row" style="margin-top: 5px;">
                    <div class="col-auto pr-0" style="">
                        <img src="assets/images/m3.png" alt="" class="home-level-icon-size" style="">
                    </div>
                    <div class="col align-self-center">
                        <h5 class="mb-2 font-weight-normal" style="margin-top: 3px;">
                            <!--                        <span style="float: left" class="form-control-title-color">Vip1</span>-->
                            <span style="float: left;margin-left: 0;font-size: 16px;" class="home-member-text-color">VIP
                                3&nbsp;</span>
                            <span class="home-level-percent-text" style="float: left;font-size: 16px;">Member</span>
                            <span class="home-level-percent-text"
                                style="font-size: 16px;float: left;margin-left: 10px;float: right">1.50%</span>
                            <img src="assets/images/home_lock.png" alt="" class=""
                                style="height: 20px;float: right;">
                            <div style="clear: both">
                            </div>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="level-block form-group-bg" data-text="3" id="level_3" style="">
            <div class="">
                <div class="row" style="margin-top: 5px;">
                    <div class="col-auto pr-0" style="">
                        <img src="assets/images/m4.png" alt="" class="home-level-icon-size" style="">
                    </div>
                    <div class="col align-self-center">
                        <h5 class="mb-2 font-weight-normal" style="margin-top: 3px;">
                            <!--                        <span style="float: left" class="form-control-title-color">Vip1</span>-->
                            <span style="float: left;margin-left: 0;font-size: 16px;" class="home-member-text-color">VIP
                                4&nbsp;</span>
                            <span class="home-level-percent-text" style="float: left;font-size: 16px;">Member</span>
                            <span class="home-level-percent-text"
                                style="font-size: 16px;float: left;margin-left: 10px;float: right">2.50%</span>
                            <img src="assets/images/home_lock.png" alt="" class=""
                                style="height: 20px;float: right;">
                            <div style="clear: both">
                            </div>
                        </h5>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
    {{-- @include('user.themes.bimeo.includes._pop-up') --}}
@endsection

@section('script')
<script src="{{ asset('frontassets/model.js') }}"></script>
<script src="{{ asset('frontassets/custom.js') }}"></script> 
@endsection

 
