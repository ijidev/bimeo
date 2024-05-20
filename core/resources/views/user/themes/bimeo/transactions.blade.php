@extends('user.themes.bimeo.layouts.base')

@section('content')
    <div class="container">
        @foreach ($transactions as $trans)
            <div style="background:#112; text:black; padding:0 10px; margin:0px; border-radius:10px;">
                <div class="card-heade bg-none">
                    <div class="row">
                        <div class="col record-padding" style="">
                            <p class=""><span style="display: flex; font-size: 12px;"></span>
                            </p>
                        </div>
                        <div class="col-auto record-padding">
                            <div class="card-footer" >

                                {{-- status --}}
                                <div class="row">
                                    <div class="col record-padding" style="color:blue; text-align:center;">
                                        <div class="customer-define-colo text-center" style="color:white;"> Type </div>
                                        
                                        <div class="customer-define-colo text-center" style="color:white;">{{ $trans->type }}</div>
                                        
                                    </div>
                                </div>

                                <div class="row" style="text-align:center;">
                                    <div class="col-auto">
                                        <div class="customer-define-color text-center">Amount</div>
                                        
                                        <div class="text-right text-center">$ {{ $trans->amount }}</div>
                                    </div>
                                </div>

                                <div class="row" style="text-align:center;">
                                    <div class="col-auto">
                                        <div class="customer-define-color text-center">Date</div>
                                        
                                        <div class="text-right text-center">{{ $trans->created_at }}</div>
                                    </div>
                                </div>

                                {{-- <div class="mt-2" style="width: 100px;;">
                                    
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>

                <hr>

               

                </div>
            </div>
        @endforeach

    </div>
@endsection
