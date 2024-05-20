<html lang="en" class="omgmarketing-theme" xmlns="http://www.w3.org/1999/html">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover, user-scalable=no">
    <meta name="description"
        content="Social media marketing has the potential to build a dedicated community of customers, clients, and advocates.BIMEO DIGITAL can grow your social presence!. Get a social strategy tailored to your exact needs.">
    <meta name="keywords"
        content="Social media marketing has the potential to build a dedicated community of customers, clients, and advocates.BIMEO DIGITAL can grow your social presence!. Get a social strategy tailored to your exact needs.">
    <title>BIMEO DIGITAL</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('bimeoassets/css/style3.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}">
    <link rel='shortcut icon' type='image/x-icon' href="{{ asset('bimeoassets/images/ds-logo.png') }}" />
    <link href="{{ asset('bimeoassets/styles/layer2.css') }}" type="text/css" rel="styleSheet" id="layermcss">
    @yield('head')
    <style>
        .body {
            background-image: url(ds\ bg.jpg);
        }
    </style>
    <style type="text/css">
        .modal-noborder .modal-content {
            width: 320px;
            margin: auto;
        }

        .modal-noborder .modal-body {
            overflow: unset !important;
            padding: 0 !important;
        }

        .modal-noborder .modal-body img {
            width: 100% !important;
            height: auto !important;
            padding-left: 0 !important;
            border-radius: 10px;
        }

        .modal-noborder .modal-footer {
            display: none;
        }

        .run-container {
            /*width: 100%;*/
            /*position: absolute;*/
            /*left: 60px;*/
            white-space: nowrap;
            overflow: hidden;
            font-size: 15px;
        }

        .run-container-text {
            position: relative;
            width: fit-content;
            animation: running-text 30S linear infinite;

        }

        .run-container .run-container-text {
            position: relative;
            /*right: -100%;*/
            content: attr(text);
        }

        @keyframes running-text {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        }
    </style>
</head>

<body class="wrapper homepage page-background"
    style="background-image: url({{ asset('bimeoassets/images/background.jpg') }});">
    <!-- header -->
    <div class="header head-bg" style="">
        <div class="row no-gutters">
            <a href="{{ route('home') }}">
                <div class=" text-cente">
                    <img src="{{ asset('bimeoassets/images/ds-logo.png') }}" alt="" class="page-logo-head"
                        style="margin-left: 20px;">
                </div>
            </a>
            
            @php
               $notify = \App\Models\Notification::where('user_id', Auth::user()->id)
            ->where('is_read', false)->get();  
            @endphp
            <div style="width: 100%;height: 30px;display: inline-block;position: absolute;text-align: right;top: 23px;">
                <a href="{{route('notify')}}">
                    <img src="{{ asset('bimeoassets/images/msg.png') }}" style="width: 30px;">
                    <span id="msg_numb"
                        style="padding: 5px 10px;margin-right: 20px;margin-left: 5px;border-radius: 15px;background: black;color: white;">
                        @if ($notify->count() >= 1)
                            {{ $notify->count() }}
                        @else
                            0
                        @endif
                    </span>
                </a>
            </div>
        </div>
    </div>
    <!-- header ends -->

    <div class="page-header">
        <div class="container-fluid">
          <h2 class="h5 no-margin-bottom">@yield('title')</h2>
            @if (session('success'))
                <div class="alert alert-success text-center" role="alert"
                    style="background: blue; 
                        color:white; 
                        padding:10px; 
                        text-align:center; 
                        border-radius:15px;
                    ">
                    {{ session('success') }}
                </div>   
            @elseif (session('error'))
                <div class="alert alert-danger text-center" role="alert"
                    style="background: rgb(192, 4, 4); 
                        color:white; 
                        padding:10px; 
                        text-align:center; 
                        border-radius:15px;"
                    >
                    {{ session('error') }} <br>  <br>
                    <a href="{{ route('contact') }}" class="support-btn mt-4">Contact Support</a>
                </div>
            @endif
        </div>
    </div>

    @yield('content')

    <!-- footer-->
    <div class="footer">
        <div class="no-gutters">
            <div class="">
                <div class="row no-gutters my-browser-flex my-browser-flex-space-between">
                    <div class="col-menu my-browser-flex-cente">
                        <a href="{{ route('home') }}" style="border-radius:0;"
                            class="btn profile-balance-title-content  active">
                            <img class="material-icons" src="{{ asset('bimeoassets/images/foot-home.png') }}">
                            <p class="footer-text-color" style="margin-top: 5px;">Home</p>
                        </a>
                    </div>
                    <div class="col-menu text-cente">
                        <a href="{{ route('getstarted') }}" style="border-radius:0;"
                            class="btn profile-balance-title-content ">
                            <img class="material-icons" src="{{ asset('bimeoassets/images/home_start.png') }}">
                            <p class="footer-text-color" style="margin-top: 5px;">Starting</p>
                        </a>
                    </div>
                    <div class="col-menu text-cente">
                        <a href="{{ route('record') }}" style="border-radius:0;"
                            class="btn profile-balance-title-content ">
                            <img class="material-icons" src="{{ asset('bimeoassets/images/home_records.png') }}">
                            <p class="footer-text-color" style="margin-top: 5px;">Records</p>
                        </a>
                    </div>
                    <div class="col-menu text-cente">
                        <a href="{{ route('profile') }}" style="border-radius:0;"
                            class="btn profile-balance-title-content ">
                            <img class="material-icons" src="{{ asset('bimeoassets/images/profile.png') }}">
                            <p class="footer-text-color" style="margin-top: 5px;">Profile</p>
                        </a>
                    </div>
                    <!--              <div class="col-auto">-->
                    <!--                <a href="/index/support/index.html" class="btn profile-balance-title-content ">-->
                    <!--                  <i class="material-icons">chat</i>--><!--                  &lt;!&ndash;<p>CS</p>&ndash;&gt;</a>-->
                    <!--              </div>-->
                    <!--              <div class="col-menu">-->
                    <!--                <a href="/index/my/index.html" class="btn profile-balance-title-content ">-->
                    <!--                  <i class="material-icons">person</i>-->
                    <!--                  <p style="margin-top: 5px;">Profile</p>-->
                    <!--                </a>-->
                    <!--              </div>-->
                </div>
            </div>
        </div>
    </div>
    <!-- footer ends-->

    </script>
    @yield('script')
</body>

</html>
