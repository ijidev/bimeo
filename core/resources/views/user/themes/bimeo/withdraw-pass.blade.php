@extends('user.themes.bimeo.layouts.base')

@section('content')
    <div class="content-bg-top"
        style="padding-top: 54px;margin-top: 10px;position: absolute;top: 0;bottom: 0;left: 0;right: 0">
        <form action="{{route('withdraw')}}"  id="forgetpwd-form">
            @csrf
          <div class=" my-browser-flex my-browser-flex-nowrap " style="color:black">
                <div class="text-center" style="width: 100%">
                    
                    <div style="padding: 30px;">
                    
                        <hr>
                          <div id="withdrawal-tab" class="passwd-edit " style="margin: 5px 20px;">Enter Withdrawal Password</div>
                        <hr>

                        <div class="form-group my-browser-flex my-browser-flex-nowrap my-browser-flex-row deposit-page-input-bg "
                            style="align-items:center;margin-bottom: 20px;">
                            <div class="edit-pwd-title-color" style="padding-left: 20px;">Withdrawal password</div><input
                                type="password" name="pass" class="deposit-page-form-control" style="" id="password_confirm"
                                placeholder="Type here">
                        </div>
                    </div>

                    <div class=" my-browser-flex my-browser-flex-nowrap  mt-4">
                        <div class="col"><button class="btn btn-lg btn-default btn-block shadow form-buttom"
                                style="margin-top: 80px"><span>Confirm Password</span></button></div>
                    </div>
                </div>
            </div>
        </form>
    </div>
  </div>
@endsection
