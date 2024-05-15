@extends('user.themes.bimeo.layouts.base')

@section('content')
    <div class="content-bg-top"
        style="padding-top: 54px;margin-top: 10px;position: absolute;top: 0;bottom: 0;left: 0;right: 0">
        <form action="{{route('updateSetting')}}" method="POST" id="forgetpwd-form">
            @csrf
          <div class=" my-browser-flex my-browser-flex-nowrap " style="color:black">
                <div class="text-center" style="width: 100%">
                    <br>
                    <br>
                    <hr>
                    <div class="my-browser-flex my-browser-flex-nowrap my-browser-flex-space-between text-center"
                        style="margin: 5px 20px;">
                        
                          <div id="passwd-tab" class="passwd-edit" style="margin: 5px 20px;">Update Login Password</div>                    </div>
                        <hr>
                        <div style="width: 100%;height: 1px;" class="split-line">
                    </div>
                    <div style="padding: 30px;">
                        <div class="form-group my-browser-flex my-browser-flex-nowrap my-browser-flex-row deposit-page-input-bg "
                            style="align-items:center;margin-bottom: 20px;color: black;">
                            <div class="edit-pwd-title-color" style="padding-left: 20px;">Old password</div>
                            <input type="password" name="oldpassword" class="deposit-page-form-control" style="width: 50%;" id="old_pwd"
                                placeholder="Type here">
                        </div>

                        <div class="form-group my-browser-flex my-browser-flex-nowrap my-browser-flex-row deposit-page-input-bg "
                            style="align-items:center;margin-bottom: 20px;">
                            <div class="edit-pwd-title-color" style="padding-left: 20px;">New password</div>
                            <input type="password" name="newpass" class="deposit-page-form-control" style="" id="new_pwd"
                                placeholder="Type here">
                        </div>
                        <div class="form-group my-browser-flex my-browser-flex-nowrap my-browser-flex-row deposit-page-input-bg "
                            style="align-items:center;margin-bottom: 20px;">
                            <div class="edit-pwd-title-color" style="padding-left: 20px;">Confirm password</div><input
                                type="password" name="confirmpass" class="deposit-page-form-control" style="" id="password_confirm"
                                placeholder="Type here">
                        </div>

                        <hr>
                          <div id="withdrawal-tab" class="passwd-edit " style="margin: 5px 20px;">Update Withdrawal Password</div>

                        <hr>

                        <div class="form-group my-browser-flex my-browser-flex-nowrap my-browser-flex-row deposit-page-input-bg "
                            style="align-items:center;margin-bottom: 20px;">
                            <div class="edit-pwd-title-color" style="padding-left: 20px;">Withdrawal password</div><input
                                type="password" name="withdrawalpass" class="deposit-page-form-control" style="" id="password_confirm"
                                placeholder="Type here">
                        </div>
                    </div>
                    <div class=" my-browser-flex my-browser-flex-nowrap  mt-4">
                        <div class="col"><button class="btn btn-lg btn-default btn-block shadow form-buttom"
                                style="margin-top: 80px"><span>Confirm</span></button></div>
                    </div>
                </div>
            </div>
        </form>
    </div>
  </div>
@endsection
