@extends('user.themes.bimeo.layouts.base')

@section('content')
    <div class="content-bg-top"
        style="padding-top: 54px;margin-top: 10px;position: absolute;top: 0;bottom: 0;left: 0;right: 0">
        <form action="{{ route('request.withdraw') }}" id="forgetpwd-form">
            @csrf
          <div class=" my-browser-flex my-browser-flex-nowrap " style="color:black">
                <div class="text-center" style="width: 100%">
                    
                    <hr>

                    <div class="my-browser-flex my-browser-flex-nowrap my-browser-flex-space-between text-center"
                        style="margin: 5px 20px;">
                        
                          <div id="passwd-tab" class="passwd-edit" style="margin: 5px 20px;">Withdrawal Request</div>                    </div>
                        <hr>
                        <div style="width: 100%;height: 1px;" class="split-line">
                    </div>

                    <div class="my-browser-flex my-browser-flex-nowrap my-browser-flex-space-between text-center"
                        style="margin: 5px 20px;">
                        
                        <hr> <div style="color:white;">
                            Withdrawable Balance ${{ Auth::user()->asset }} 
                        </div>
                        <hr>
                          <div id="passwd-tab" class="passwd-edit" style="margin: 5px 20px;"></div>                    </div>
                        <hr>
                        <div style="width: 100%;height: 1px;" class="split-line">
                    </div>

                    <div style="padding: 30px;">

                        <div class="form-group my-browser-flex my-browser-flex-nowrap my-browser-flex-row deposit-page-input-bg "
                            style="align-items:center;margin-bottom: 20px;">
                            <div class="edit-pwd-title-color" style="padding-left: 20px;">Payment Methold</div>
                                <select id="my-select" class="form-control " style="height: 20px;" name="wallet">
                                    @foreach($wallets as $wallet)
                                        <option value="{{ $wallet->id }}">{{ $wallet->type }}</option>
                                    @endforeach
                                </select>
                        </div>
                        
                        
                        <div class="form-group my-browser-flex my-browser-flex-nowrap my-browser-flex-row deposit-page-input-bg "
                            style="align-items:center;margin-bottom: 20px;">
                            <div class="edit-pwd-title-color" style="padding-left: 20px;">Withdrawal Amount</div>
                            <input type="number" name="amount" class="deposit-page-form-control" style="" id="password_confirm" placeholder="Type here">
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
