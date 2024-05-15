@include('user.themes.bimeo.layouts.auth_layout')


<body class="wrapper homepage bg-background" style="position: absolute">
    <div class="" style="position: absolute;top: 0;right: 0;z-index: 100;" hidden="hidden">
        <a href="support.html" class=" text-center my_actin-icon">
            <div class="login-contact-text-color" style="border-radius:10px;padding: 15px;">
                <img src="assets/images/ds bg.jpg" class="avatar-20">
                <p class="login-desc-text-color small mt-2" style="padding-right: 5px;">Contact Us</p>
            </div>
        </a>
    </div>
    <div class="passport" style="background-color: rgba(0, 0, 0, 0);padding-bottom : 0;">
        <div class="container">
            <div class="bg-default">
                <div class="row no-gutters login-row">
                    <div class="col align-self-center px-3 mt-3">
                        <div class="text-center" style="margin-top: 50px;">
                            <img src="{{ asset('bimeoassets/images/ds-logo.png') }}" style="margin-left: 20px;" class="big-logo-size">
                        </div>
                        
                        <form action="{{ route('register') }}" method="POST">
                            @csrf

                            <div class="form-signin">
                                <div class="form-group"
                                    style="padding-top: 20px;padding-bottom: 40px;background: white;border-radius: 20px 20px 0 0;">
                                    <div style="font-size: 20px;float: left;display: inline;margin-left: 20px; color: black;"
                                        class="login-desc-text-color-style">Register</div>
                                </div>
    
                                <div class="form-group" style="margin-top: 20px;margin-bottom: 20px;">
                                    <div style="display: block;margin-left: 20px; " class="login-desc-text-color-style">
                                        Please register to access more</div>
                                </div>
    
                                <hr>
                                <br>
                                <div style="width: 100%;height: 1px;" class="split-line">
                                </div>
    
                                <div class="form-group">
                                    <div class="form-control-title login-title-text-color">Username</div>
                                    <input type="text" name="name" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" placeholder="username..." value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
    
                                <div style="width: 100%;height: 1px;" class="split-line">
                                </div>
                                <hr>
                                <br>
    
                                <div class="form-group">
                                    <div class="form-control-title login-title-text-color" style="width: 40%;">Password</div>
                                    <input id="password" type="password" style="width: 60%;" placeholder="Password..." class="form-control text-white @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
    
                                <div style="width: 100%;height: 1px;" class="split-line">
                                </div>
    
                                <hr>
                                <br>
                                <div class="form-group">
                                    <div class="form-control-title login-title-text-color" style="width: 50%;">
                                        Confirm Password
                                    </div>
                                    <input style="width: 50%;" type="password" placeholder="Re-enter Password..." class="form-control text-white" name="password_confirmation" required autocomplete="new-password">
                                    
                                </div>
                                <div style="width: 100%;height: 1px;" class="split-line">
                                </div>
    
                                <hr>
                                <br>

                                <div class="form-group">
                                    <div class="form-control-title login-title-text-color" style="width: 50%;"> 
                                        Withdrawal Password 
                                    </div>
                                    <input id="withdrawal-password" style="width: 40%;" type="password" placeholder="Password for withdrawal..." class="form-control text-white" name="withdrawal_password" required autocomplete="new-password">
                                </div>

                                <div style="width: 100%;height: 1px;" class="split-line">
                                </div>
                                
                                <hr>
                                <br>

                                <div class="form-group">
                                    <div class="form-control-title login-title-text-color" style="width: 60%;">
                                        Gender
                                    </div>
                                    <select class="form-control text-white" name="gender" required>
                                        <option value="Male">Male</option>
                                        <option value="Male">Female</option>
                                    </select>
                                </div>

                                <div style="width: 100%;height: 1px;" class="split-line">
                                </div>
                                <hr>
                                <br>
                                
                                <div class="form-group">
                                    <div class="form-control-title login-title-text-color" style="width: 50%;">
                                        Invitation Code
                                    </div>
                                    <input id="ref_code" type="text" placeholder="Member ID..." style="width: 50%; class="form-control  text-white @error('ref_code') is-invalid @enderror" name="ref_code" value="{{ old('ref_code') }}">
                                    @error('ref_code')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                    
                                    
                                <div style="width: 100%;height: 1px;" class="split-line"></div>
                                <hr>
                                <br>
                                <a href="support.html" class=" text-center my_actin-icon">
                                    <div class="login-contact-text-color" style="border-radius:10px;padding: 15px;">
                                        <img src="{{ asset('bimeoassets/images/login_cs.png') }}" class="avatar-40">
                                        <span class="login-desc-text-color-style2 small mt-2"
                                            style="padding-right: 5px;">Need Help?</span>
                                    </div>
                                </a>
                            </div>

                            <div class="row mx-0 mt-4 " style="margin-top:10px!important">
                                <div class="col" style="text-align: center">
                                    <input type="checkbox" name="registerSwitch"> &nbsp;
                                    <a href="{{ route('terms') }}" class="mt-4 login-desc-text-colo"
                                        style="margin-top:10px!important">Register Agreement</a>
                                </div>
                            </div>

                            <!-- login buttons -->
                            <div class="row mx-0 mt-4 " style="margin-top:30px;text-align: center;">
                                <button type="submit" class="btn btn-default btn-lg shadow btn-block form-buttom" style="width: 80%;">Register</button>
                            </div>

                        </form>
                    </div>
                </div>

                <div class="form-group text-center" style="padding-top: 20px;text-align: center;">
                    <a href="login.html" style="font-size: 15px;display: inline;" class="login-title-text-color">Back
                        To Login</a>
                </div>
            </div>
        </div>
        <div style="padding-top: 5px;color: white;font-size: 9px;padding-left: 20px">
            <a title="Privacy Policy" href="/terms" style="display: block;"
                class="login-desc-text-colo">Privacy Policy</a>
        </div>
    </div>
    <script src="/red/jquery-3.3.1.min.js"></script>
    <script src="/red/md5.min.js"></script>
    <script charset="utf-8" src="/static_new/js/dialog.min.js"></script>
    <script type="application/javascript">
        $(function(){
            var countdown = 180;
            var flag = true;
            var loading = null;
            
            function check(){
                if(!check_phone()) return false;

                if (!$("input[name='registerSwitch']").prop("checked")) {
                    $(document).dialog({
                        infoText: 'Please agree to the registration agreement'
                    });
                    return false;
                }


                if($("input[id=pwd]").val()==''){
                    $(document).dialog({
                        infoText: 'Enter password'
                    });
                    return false;
                }
                if($("input[id=pwd2]").val()==''){
                    $(document).dialog({
                        infoText: 'Please confirm the password'
                    });
                    return false;
                }
                if($("input[id=pwd2]").val()!==$("input[id=pwd]").val()){
                    $(document).dialog({
                        infoText: 'Confirm password does not match'
                    });
                    return false;
                }

                if($("input[id=withdrawal_pwd]").val()==''){
                    $(document).dialog({
                        infoText: 'Enter withdrawal password'
                    });
                    return false;
                }

                if($("input[name=invite_code]").val()==''){
                    $(document).dialog({
                        infoText: 'Please enter the invitation code'
                    });
                    return false;
                }
                if($("input[name=verify]").val()==''){
                    $(document).dialog({
                        infoText: 'Please enter the Verification code'
                    });
                    return false;
                }
                return true;
            }

            function check_phone() {

                if($("#ulang").val() == 0){
                    $(document).dialog({
                        infoText: 'ulang'
                    });
                    return false;
                }

                if($("input[name=user_name]").val()==''){
                    $(document).dialog({
                        infoText: 'Please input your username'
                    });
                    return false;
                }

                var myreg=/^([0-9|A-Z|a-z]|[\u4E00-\u9FA5\uF900-\uFA2D]){2,12}$/;

                if($("input[name=tel]").val()==''){
                    $(document).dialog({
                        infoText: 'Enter phone number'
                    });
                    return false;
                }

                return true;
            }

            
            function time_down(obj){
                if (countdown == 0) {
                    flag = true;
                    obj.text("Enviar");
                    countdown = 180;
                    return;
                } else {
                    flag = false;
                    obj.text(countdown+"s") ;
                    countdown--;
                }
                setTimeout(function() {time_down(obj)},1000);
            }

            
            $(".get-code").on('click',function(){
                if($("input[name=tel]").val()==''){
                    $(document).dialog({
                        infoText: 'Enter phone number'
                    });
                    return false;
                }
                if($("input[name=user_name]").val()==''){
                    $(document).dialog({
                        infoText: 'Please input your username'
                    });
                    return false;
                }
                sendCode(123)
            });


            function sendCode(reCAPTCHA){
                $.ajax({
                    url:'/index/send/sendsms',
                    data: {
                        'tel' : $("input[name=tel]").val(),
                        'code':$(".address").text()
                    },
                    type:'POST',
                    success:function(data){
                        $('#reCAPTCHA_V2').modal('hide');
                        if(data.code==0){
                            $(document).dialog({infoText: data.info, autoClose: 3000});
                            time_down($(".get-code"));
                            if(data.verify){
                                $("input[name=verify]").val(data.verify);
                            }
                        }else{
                            flag = true;
                            $(document).dialog({infoText: data.info});
                        }
                    },
                    error: function(err) {
                        $('#reCAPTCHA_V2').modal('hide');
                        flag = true;
                        console.log(err);
                    }
                });
            }

            
            $(".form-buttom").on('click',function(){

                $(".data-refresh-captcha").trigger('click');

                if(check()){

                    let input_pwd = $("#pwd").val();
                    let input_pwd2 = $("#pwd2").val();
                    let input_withdrawal_pwd = $("#withdrawal_pwd").val();

                    input_pwd = md5(input_pwd);
                    input_pwd2 = md5(input_pwd2);
                    input_withdrawal_pwd = md5(input_withdrawal_pwd);

                    $("input[name=pwd]").val(input_pwd);
                    $("input[name=pwd2]").val(input_pwd2);
                    $("input[name=withdrawal_pwd]").val(input_withdrawal_pwd);

                    let data_input = $(".form-signin").serialize();

                    $.ajax({
                        url:"/index/user/do_register.html",
                        data:data_input,
                        type:'POST',
                        beforeSend:function(){
                            loading = $(document).dialog({
                                type : 'notice',
                                infoIcon: '/static_new/img/loading.gif',
                                infoText: 'loading...',
                                autoClose: 0
                            });
                        },
                        success:function(data){
                            loading.close();
                            if(data.code==0){
                                $(document).dialog({infoText: 'Register successfully'});
                                setTimeout(function(){
                                    location.href = "/index/user/login.html"
                                },1500);
                            }else{
                                $(document).dialog({infoText: data.info});
                            }
                        }
                    });
                }
                return false;
            });


        });
        $(".data-refresh-captcha").on('click',function () {
            image = this;
            $.ajax({
                url: "?s=think/admin/captcha",
                type: 'GET',
                success: function(ret) {
                    image.src = ret.data.image;
                    $('#verify').attr('value', '');
                    $('#uniqid').val(ret.data.uniqid);
                    return false;
                },
                error: function(data) {
                    loading.close();
                }
            });
        });
    </script>
</body>

</html>
