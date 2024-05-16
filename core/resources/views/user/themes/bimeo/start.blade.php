@extends('user.themes.bimeo.layouts.base')

{{-- <html lang="en" class="omgmarketing-theme">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover, user-scalable=no">
    <meta name="description" content="Social media marketing has the potential to build a dedicated community of customers, clients, and advocates.BIMEO DIGITAL can grow your social presence!. Get a social strategy tailored to your exact needs.">
    <meta name="keywords" content="Social media marketing has the potential to build a dedicated community of customers, clients, and advocates.BIMEO DIGITAL can grow your social presence!. Get a social strategy tailored to your exact needs.">
    <title>BIMEO DIGITAL</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
    <link href="/red/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/styles/style3.css" rel="stylesheet">
 
    <link href="assets/styles/layer2.css" type="text/css" rel="styleSheet" id="layermcss">
    <style>
        .body{
            background-image: url(ds\ bg.jpg);
        }
    </style>   
</head>
    <body class="wrapper homepage page-color-background">
      <div class="header head-bg" style="">
      <div class="row no-gutters">
        <div class="col text-center">
          <img src="assets/images/ds-logo.png" alt="" class="page-logo-head" style="margin-left: 20px;">
          </div>
              <!--        <a href="/index/user/lang" style="width: 100%;height: 30px;display: inline-block;position: absolute;text-align: right;top: 20px" >-->
            <!--            
              <img src="../../static_catalog/img/lang.svg" style="margin-right: 20px; width: 30px;height: 30px;">
            </img>-->
              <!--            
                <div class="head-lang-text-style" style="margin-right: 12px;font-size: 12px;">Language</div>-->
                <!--        </a>-->
                <!--        <a href="/index/my/index.html" style="width: 100%;height: 50px;display: inline-block;position: absolute;text-align: right;top: 20px" >-->
                  <!--            <img src="../../static_catalog/img/profile.png" style="margin-right: 20px; width: 30px;height: 30px;">
                  </img>-->
                  <!--           
                     <div class="head-text-color" style="margin-right: 12px;">Profile</div>-->
                     <!--        </a>-->
                     <!--        <a href="/index/my/cs" style="width: 100%;height: 20px;display: inline-block;position: absolute;text-align: right;top: 28px" >--><!--            
                      <img src="../../static_catalog/img/login_cs.png" style="margin-right: 20px; width: 20px;">-->
                      <!--        </a>--><!--        <a href="/index/my/cs" style="width: 100%;height: 20px;display: inline-block;position: absolute;text-align: right;top: 28px" >--><!--           
                         <img src="../../static_catalog/img/login_cs.png" style="margin-right: 20px; width: 20px;">-->
                         <!--            &lt;!&ndash;            
                         <div class="head-text-color" style="margin-right: 12px;">Contact Us</div>&ndash;&gt;-->
                         <!--        </a>-->
                         <a href="/index/my/msg_list.html" style="width: 100%;height: 30px;display: inline-block;position: absolute;text-align: right;top: 23px;">
                         <img src="assets/images/msg.png" style="width: 30px;">
                         <span id="msg_numb" style="padding: 5px 10px;margin-right: 20px;margin-left: 5px;border-radius: 15px;background: black;color: white;">0</span>
                         <!--            <div class="head-text-color" style="margin-right: 12px;">Contact Us</div>-->
                         </a>
                         </div>
                         </div>
                         <!-- header ends --> --}}

@section('content')
    <div class="container">
        <div class="">
            <div class="card-body" style="padding:10px 0;">
                <div class=" my-browser-flex my-browser-flex-nowrap " style="">
                    <span class="big-title-color title-font-family">Boost Mission</span>
                    <a style="margin-left: auto" href="/index/order/index.html" hidden="hidden">
                        <span class="roboot-history-style content-font" style="">History</span></a>
                </div>
            </div>
        </div>
    </div>
    <div class="gif">
        <div class="text-center">
            <img style="max-width: 90%;max-height: 240px;margin-left: 40%;" class="" src="{{asset('bimeoassets/images/start.gif')}}">
            <div class="image-container ">
            </div>
        </div>
    </div>
    <div class="swiper-container card-slide swiper-container-horizontal swiper-container-ios">
        <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
            <div class="swiper-slide pb-4 swiper-slide-active">
                <div class="container z-1 position-relative">

                </div>
                <div class="container z-0" style="padding-bottom: 20px;">
                    <div class="card">
                        {{-- <div > --}}
                          <form action="{{ route('start') }}" class="card-footer">
                            <button type="submit" style="text-transform:none; width:100%" 
                              class="btn btn-default btn-block btn-lg btn-important" >Start
                              Now ( {{$user->optimized . '/' . $user->tier->daily_optimize}} )
                            </button>
                          </form>
                            <br>
                        {{-- </div> --}}
                    </div>
                </div>
                <div class="container top-50 z-0" style="margin-top:3% ;">
                    <div class="pt-5 ">
                        <div class="level-block form-group-bg" style="margin: 10px 0;">
                            <div class=" my-browser-flex my-browser-flex-nowrap " style="margin-top: 7px;">
                                <div class="col-auto pr-0" style="">
                                    <img src="{{ $user->tier->icon }}" style="" alt=""
                                        class="home-level-icon-size">
                                    <span style="margin-left: 10px;color: #c6c7e9d8;" hidden="hidden">Current Ranking</span>
                                    <span style="margin-left: 10px;color: #0f16e0;" class="roboot-level-name-style">{{ $user->tier->name}}</span>
                                </div>
                                <div class="form-control-title-color"
                                    style="flex: 1;text-align:right;font-size: 20px;margin-top: 2px;margin-right: 10px;">
                                    {{ $user->tier->percent . '%' }}</div>
                            </div>
                        </div>
                        <div style="width: 100%;height: 1px; color:blue;" class="split-line">
                        </div>
                        <div style="margin: 10px 0; padding:10px; color:blue !important; background:white; border-radius:10px;">
                          <div class="card-body  start-page-info-shap">
                              <div class="row">
                                  <div class="col"
                                      style="font-size: 15px !important;  display: flex;width: 100%;justify-content: space-between;">
                                      <p style="margin-bottom: 0px; color:blue;">Today's Commission</p>
                                      <span style="font-size: 18px !important; font-weight: bold;"
                                          class="customer-define-colo mr-1">0.00 USD </span>
                                  </div>
                              </div>
                          </div>
  
                          <div style="width: 100%;height: 1px;" class="split-line"></div>
                          <div class="card-body  start-page-info-shap" onclick="open_user_test_data()">
                              <div class="row">
                                  <div class="col "
                                      style="font-size: 15px !important;display: flex;width: 100%;justify-content: space-between;">
                                      <p style="margin-bottom: 0">Total Profit</p>
                                      <span style="font-size: 18px !important; font-weight: bold;"
                                          class="customer-define-colo mr-1" id="aval_balance">{{$user->balance}} USD </span>
                                  </div>
                              </div>
                          </div>
  
                          <div style="width: 100%;height: 1px;" class="split-line">
                          </div>
  
                          <div class="card-body  start-page-info-shap">
                              <div class="row">
                                  <div class="col "
                                      style="font-size: 15px !important;display: flex;width: 100%;justify-content: space-between;">
                                      <p style="margin-bottom: 0">Account Balance</p>
                                      <span style="font-size: 18px !important; font-weight: bold;"
                                          class="customer-define-colo mr-1" id="account_balance">{{$user->asset}} USD </span>
                                  </div>
                              </div>
                          </div>
  
                          <div style="width: 100%;height: 1px;" class="split-line">
                          </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <h6 class="subtitle mt-1" style="text-transform: none;margin-bottom: 0;">Notice</h6>
            <div class="border-0 mb-3">
                <div class="card-body" style="padding-top: 5px;">
                    <div>
                        <span class="dot" style="background: grey;margin-right: 5px;">
                        </span>
                        <span style="white-space: normal;">Working time: 11:00 - 22:59 </span>
                    </div>
                    <div>
                        <span class="dot" style="background: grey;margin-right: 5px;">
                        </span>
                        <span style="white-space: normal;margin-right: 5px;">For advances and withdrawals, please contact
                            our Customer Service</span>
                    </div>
                </div>
                <p></p>
            </div>
        </div>
    </div>
    </div>
@endsection
<!-- footer-->
{{-- <div class="footer">
                                                                              <div class="no-gutters">
                                                                                <div class="">
                                                                                  <div class="row no-gutters my-browser-flex my-browser-flex-space-between">
                                                                                    <div class="col-menu my-browser-flex-center">
                                                                                      <a href="index.html" style="border-radius:0;" class="btn profile-balance-title-content  ">
                                                                                      <img class="material-icons" src="assets/images/foot-home.png">
                                                                                      <p class="footer-text-color" style="margin-top: 5px;">Home</p></a>
                                                                                      </div><div class="col-menu text-center">
                                                                                        <a href="start.html" style="border-radius:0;" class="btn profile-balance-title-content active">
                                                                                        <img class="material-icons" src="assets/images/home_start.png">
                                                                                        <p class="footer-text-color" style="margin-top: 5px;">Starting</p></a>
                                                                                        </div>
                                                                                        <div class="col-menu text-center">
                                                                                          <a href="record.html" style="border-radius:0;" class="btn profile-balance-title-content ">
                                                                                          <img class="material-icons" src="assets/images/home_records.png">
                                                                                          <p class="footer-text-color" style="margin-top: 5px;">Records</p></a>
                                                                                          </div>
                                                                                          <div class="col-menu text-center">
                                                                                            <a href="profile.html" style="border-radius:0;" class="btn profile-balance-title-content ">
                                                                                            <img class="material-icons" src="assets/images/profile.png">
                                                                                            <p class="footer-text-color" style="margin-top: 5px;">Profile</p></a>
                                                                                            </div>
                                                                                            <!--              
                                                                                              <div class="col-auto">--><!--                
                                                                                                <a href="/index/support/index.html" class="btn profile-balance-title-content ">-->
                                                                                                  <!--                  
                                                                                                    <i class="material-icons">chat</i>-->
                                                                                                    <!--                  &lt;!&ndash;<p>CS</p>&ndash;&gt;</a>-->
                                                                                                    <!--              </div>--><!--              
                                                                                                      <div class="col-menu">-->
                                                                                                        <!--                
                                                                                                          <a href="/index/my/index.html" class="btn profile-balance-title-content ">-->
                                                                                                            <!--                  <i class="material-icons">person</i>-->
                                                                                                            <!--                  <p style="margin-top: 5px;">Profile</p>-->
                                                                                                            <!--                </a>--><!--              
                                                                                                              </div>-->
                                                                                                              </div>
                                                                                                              </div>
                                                                                                              </div>
                                                                                                              </div>
                                                                                                              <!-- footer ends-->
                                                                                                              
  </body>
  </html> --}}
