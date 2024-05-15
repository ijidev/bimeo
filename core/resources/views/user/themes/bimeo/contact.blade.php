@extends('user.themes.bimeo.layouts.base')
@section('content')
    <div id="app" class="homepage my-browser-flex my-browser-flex-column"
        style="margin-top:60px; flex-grow: 1;align-items: center;">
        <div class="my-browser-flex my-browser-flex-row">
            <a class="my-browser-flex my-browser-flex-column" href="https://t.me/m/fw21p_heODA1"
                style="margin-top: 160px;width: auto;align-items: center;padding: 0 30px;">
                <img src="{{ asset('bimeoassets/images/cs1.png') }}" style="width: 80px;margin-bottom: 10px;"><span
                    class="right-color">Telegram</span></a>
        </div>
        <p class="right-color" style="margin-top: 30px;">Click To Contact Customer Service</p>
    </div>
    <div class="container" style="margin-top: 20px;">
        <h6 class="subtitle mt-1 form-control-title-color" style="text-transform: none;margin-bottom: 0;">Notice</h6>
        <div class="border-0 mb-3">
            <div class="card-body right-color" style="padding-top: 5px;">
                <div><span class="dot" style="background: grey;margin-right: 5px;"></span><span
                        style="white-space: normal;">Working time: 11:00 - 22:59 </span></div>
                <div><span class="dot" style="background: grey;margin-right: 5px;"></span><span
                        style="white-space: normal;margin-right: 5px;">For advances and withdrawals, please contact our
                        Customer Service</span></div>
                <!--        <p style="white-space: normal;">qd_desc_info_3</p>--><!--        <p style="white-space: normal;">qd_desc_info_4</p>-->
            </div>
            <p></p>
        </div>
    </div><!-- Start of LiveChat (www.livechat.com) code -->
@endsection
