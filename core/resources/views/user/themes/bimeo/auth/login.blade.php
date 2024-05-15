@include('user.themes.bimeo.layouts.auth_layout')

<body class="wrapper homepage bg-background" style="position: absolute;">

    <div class="" style="position: relative; margin-top: 60px;">

        <div class="container">
            <div class="bg-default">
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="row no-gutters login-row" style="flex-direction: column;">
                        <div class="col align-self-center px-3 mt-4">
                            <div class="text-center">
                                <img src="{{ asset('/bimeoassets/images/ds-logo.png') }}" style="margin-left: 10px;"
                                    class="big-logo-size">
                            </div>
                            <!--<p style="margin-top: 5px; font-style: italic">l_dl</p>-->

                            <div class="form-signin mt-3" style="padding-bottom: 20px;">
                                <div class="form-group"
                                    style=" padding-top: 20px;padding-bottom: 40px; background: blue; border-radius: 20px 20px 0 0;">
                                    <div style="font-size: 20px; float: left; display: inline; margin-left: 20px;"
                                        class="login-desc-text-color-style">
                                        Login
                                    </div>
                                </div>
                                <div class="form-group" style="margin-top: 20px; margin-bottom: 20px;">
                                    <div class="login-desc-text-color-style" style="display: block; margin-left: 20px;">
                                        Please log in to access more
                                    </div>
                                </div>
                                
                                <div style="width: 100%; height: 1px;" class="split-line"></div>
                                
                                <div class="my-browser-flex my-browser-flex-row"
                                    style="margin-top: 5px; margin-bottom: 5px;">
                                    <div class="form-control-title login-title-text-color"
                                        style="width: 90px; display: inline-block;">
                                        Username
                                    </div>
                                    <input type="text" id="inputEmail" name="username"
                                        class="form-control text-dark form-control-lg login-input-text-color"
                                        style="line-height: 45px;"
                                        placeholder="Type here" required />
                                </div>
                                <div style="width: 100%; height: 1px;" class="split-line"></div>
                                <br />
                                <div class="my-browser-flex my-browser-flex-row">
                                    <div class="form-control-title login-title-text-color"
                                        style=" width: 90px; display: inline-block; line-height: 45px;">
                                        Password
                                    </div>
                                    <input type="password" id="pwd" name="password"
                                        class="form-control form-control-lg login-input-text-color"
                                        placeholder="Type here" value="" required="" />
                                </div>
                                <div style="width: 100%; height: 1px;" class="split-line"></div>
                                <div class="form-group my-browser-flex my-browser-flex-row my-browser-flex-space-between"
                                    style="padding: 10px 20px;">
                                    <a href="{{ route('password.request') }}" class="login-desc-text-color-style2"
                                        style=" font-size: 15px; display: inline; margin-right: 20px; text-decoration: underline; ">
                                        Forget Password?
                                    </a>
                                    <a href="{{ route('register') }}" class="login-desc-text-color-style2"
                                        style="
                          font-size: 15px; display: inline;
                          margin-right: 20px; text-decoration: underline;
                        ">Register
                                        Now?</a>
                                </div>
                            </div>
                        </div>
                        <div class="row mx-0 mt-4">
                            <div class="col">
                                <button class="btn btn-default btn-lg shadow btn-block login"
                                    style="width: 80%; align-content: center; margin-left: 10%;">
                                    Login Now
                                </button>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="my-browser-flex my-browser-flex-row my-browser-flex-space-between"
                    style="margin: 20px 10px;">
                    <img class="login-honor-style" src="{{ asset('/bimeoassets/images/honor1.png') }}" />
                    <img class="login-honor-style" src="{{ asset('/bimeoassets/images/honor2.png') }}" />
                    <img class="login-honor-style" src="{{ asset('/bimeoassets/images/honor3.png') }}" />
                    <img class="login-honor-style" src="{{ asset('/bimeoassets/images/honor4.png') }}" />
                    <img class="login-honor-style" src="{{ asset('/bimeoassets/images/honor5.png') }}" />
                    <img class="login-honor-style" src="{{ asset('/bimeoassets/images/honor6.png') }}" />
                </div>
            </div>
            <div
                style="
            margin-top: 20px;
            color: white;
            font-size: 9px;
            margin-left: 20px;
          ">
                <a title="Privacy Policy" href="register.html" class="login-desc-text-color"
                    style="display: block;">Privacy Policy</a>
            </div>
        </div>
        <div class="notification shadow pt-0 pl-0 pr-0 border-0 bg-template-light">
            <div id="notification_countdown"></div>
            <div class="row pt-2 pl-3 pr-3">
                <div class="col-auto align-self-center pr-0">
                    <i class="material-icons text-template md-36">redeem</i>
                </div>
                <div class="col small notification-content">loading...</div>
                <div class="col-auto align-self-center pl-0">
                    <button class="btn btn-link closenotification">
                        <i class="material-icons text-template md-18">close</i>
                    </button>
                </div>
            </div>
        </div>
        <script src="/red/jquery-3.3.1.min.js"></script>
        <script src="/red/md5.min.js"></script>
        <script charset="utf-8" src="/static_new/js/dialog.min.js"></script>
        <script type="application/javascript">
            sessionStorage.setItem("login_flag", "1");
            $(function () {
                function check() {
                    if (
                        $("input[name=tel]").val() == "" ||
                        $("input[id=pwd]").val() == ""
                    ) {
                        $(document).dialog({
                            infoText: "Please enter account / password",
                        });
                        return false;
                    }
                    if ($("input[name=verify]").val() == "") {
                        $(document).dialog({
                            infoText: "Please enter the Verification code",
                        });
                        return false;
                    }
                    return true;
                }

                $("input[name=tel]").bind("input propertychange", function () {
                    if ($(this).val() !== "") {
                        $(".icon-delete").show();
                    } else {
                        $(".icon-delete").hide();
                    }
                });

                $(".icon-delete").on("click", function () {
                    $("input[name=tel]").val("");
                    $(".icon-delete").hide();
                });

                $(".icon-eye").on("click", function () {
                    var type = $("input[id=pwd]").attr("type");
                    if (type == "pwd") {
                        $("input[id=pwd]").attr("type", "text");
                        return;
                    }
                    $("input[id=pwd]").attr("type", "pwd");
                });

                $(".login").on("click", function () {
                    if (check()) {
                        var host = window.location.host;
                        if (host.startsWith("localhost")) {
                            form_submit("");
                        } else {
                            form_submit("");
                        }
                    }
                });

                function form_submit(reCAPTCHA) {
                    var loading = null;
                    var tel = $("input[name=tel]").val();
                    var pwd = $("input[id=pwd]").val();
                    var jizhu = $("input[name=jizhu]").val();
                    var verify = $("input[name=verify]").val();
                    var uniqid = $("input[name=uniqid]").val();
                    let time = Date.now();

                    $.ajax({
                        url: "/index/user/do_login",
                        data: {
                            tel: tel,
                            pwd: md5(md5(pwd) + time),
                            jizhu: jizhu,
                            verify: verify,
                            uniqid: uniqid,
                            time: time,
                            reCAPTCHA: reCAPTCHA,
                        },
                        type: "POST",
                        beforeSend: function (request) {
                            loading = $(document).dialog({
                                type: "notice",
                                infoIcon: "/static_new/img/loading.gif",
                                infoText: "loading...",
                                autoClose: 0,
                            });
                        },
                        success: function (data) {
                            loading.close();
                            if (data.code == 0) {
                                $(document).dialog({
                                    infoText: data.info,
                                });
                                setTimeout(function () {
                                    location.href = "index.html";
                                }, 1000);
                            } else {
                                //loading.close();
                                if (data.info) {
                                    $(document).dialog({
                                        infoText: data.info,
                                        autoClose: 2000,
                                    });
                                } else {
                                    $(document).dialog({
                                        infoText:
                                            "Network unstable, please try again at a place with better signal!",
                                        autoClose: 2000,
                                    });
                                }
                            }
                        },
                        error: function (data) {
                            //loading.close();
                        },
                    });
                }
            });
        </script>
    </div>
</body>

</html>
