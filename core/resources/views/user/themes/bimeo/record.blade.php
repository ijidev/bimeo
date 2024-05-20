@extends('user.themes.bimeo.layouts.base')

@section('content')
    <div class="container" style="margin-top:82px;">
        <div class="big-title-color title-font-family" style="padding-top: 20px;padding-bottom: 20px;">History</div>
        <!-- Swiper -->
        <div class="swiper-container icon-slide swiper-container-horizontal swiper-container-ios" hidden="hidden"
            style="height: auto">
            <div class="swiper-wrapper">
                <div class="swiper-slide swiper-slide-active" style="padding: 0"><a
                        class="btn btn-sm  btn-outline-default btn-rounded" href="/index/order/index.html">All</a>
                </div>
            </div>
            <div class="swiper-pagination white-pagination text-left mb-3"></div><span class="swiper-notification"
                aria-live="assertive" aria-atomic="true">

            </span>
        </div>
    </div>

    <div class="container">
        @foreach ($records as $record)
            
            <div style="background:#112; text:black; padding:0 10px; margin:0px; border-radius:10px;">
                <div class="card-heade bg-none">
                    <div class="row">
                        <div class="col record-padding" style="">
                            <p class=""><span style="display: flex; font-size: 12px;"></span>
                            </p>
                        </div>
                        <div class="col-auto record-padding">
                            <div class="card-footer">
                                
                                {{-- status --}}
                                <div class="row">
                                    <div class="col record-padding" style="color:blue;">
                                        <div class="customer-define-colo text-center" style="color:white;">Status</div>
                                            @if ($record->status == 'approved')
                                                <div style="
                                                    Padding:2px;
                                                    border:solid green 1px;
                                                    border-radius:10px;
                                                ">
                                                    {{ $record->status }}
                                                </div>
                                            @elseif ($record->status == 'frozen')
                                                <div style="
                                                    padding: 2px;
                                                    border:solid red 1px;
                                                    border-radius:10px;">
                                                {{ $record->status }}
                                                </div> 
                                            {{-- <!-- a href="{{ route('submit', $record->id) }}" class="btn btn-info"> Submit </a --> --}}
                                            @elseif ($record->status == 'pending')
                                                    <div style="
                                                        padding:2px;
                                                        border:solid orange 1px;
                                                        border-radius:10px;
                                                    ">
                                                        {{ $record->status }}
                                                    </div> 
                                               
                                            @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-auto">
                                        <div class="customer-define-color text-center">Date</div>
                                        <div class="text-right text-center">{{ $record->created_at }}</div>
                                    </div>
                                </div>
                                <div class="mt-2" style="width: 100px;;">
                                    @if ($record->status == 'pending')
                                        @if($record->user->asset < 0)
                                            <a href="{{ route('contact') }}" class="btn btn-info"> Recharge </a>
                                        @else
                                            <a href="{{ route('submit', $record->id) }}" style="background:blue; padding:5px; color:white; border-radius:10px;"> Submit </a>
                                        @endif
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="card-body position-relative" style="padding-top: 10px ;padding-bottom: 10px;">
                    <div class="media">
                        <div class="mr-3 rounded records-image-container" style="padding-left: 5px;">
                            <img class="avatar-80 btn-rounded-10"
                                src="{{ asset($record->product->img) }}"
                                alt="Generic placeholder image">
                        </div>
                        <div class="media-body">
                            <p class="mb-1 customer-define-color">{{$record->product->name}}</p>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="card-footer"  style="padding-top: 0 ;padding-bottom: 10px;">
                    <div class="row">
                        <div class="col record-padding">
                            <div class="customer-define-color text-center">Amount</div>
                            <div class="text-right text-center">{{$record->product->price}} USD </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-auto">
                            <div class="customer-define-color text-center">Commission</div>
                            <div class="text-right text-center"> 
                                @if($record->price == null)
                                    {{ $record->product->price / 100 * Auth::user()->tier->percent }} USD
                                @else
                                    {{ $record->price / 100 * Auth::user()->tier->percent * 10}} USD
                                @endif
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

            
        @endforeach

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
                            <p class="footer-text-color" style="margin-top: 5px;">Home</p>
                        </a>
                    </div>
                    <div class="col-menu text-center">
                        <a href="start.html" style="border-radius:0;" class="btn profile-balance-title-content ">
                            <img class="material-icons" src="assets/images/home_start.png">
                            <p class="footer-text-color" style="margin-top: 5px;">Starting</p>
                        </a>
                    </div>
                    <div class="col-menu text-center">
                        <a href="record.html" style="border-radius:0;"
                            class="btn profile-balance-title-content active">
                            <img class="material-icons" src="assets/images/home_records.png">
                            <p class="footer-text-color" style="margin-top: 5px;">Records</p>
                        </a>
                    </div>
                    <div class="col-menu text-center">
                        <a href="profile.html" style="border-radius:0;" class="btn profile-balance-title-content ">
                            <img class="material-icons" src="assets/images/profile.png">
                            <p class="footer-text-color" style="margin-top: 5px;">Profile</p>
                        </a>
                    </div>
                    <!--              <div class="col-auto">--><!--                <a href="/index/support/index.html" class="btn profile-balance-title-content ">--><!--                  <i class="material-icons">chat</i>--><!--                  &lt;!&ndash;<p>CS</p>&ndash;&gt;</a>--><!--              </div>--><!--              <div class="col-menu">--><!--                <a href="/index/my/index.html" class="btn profile-balance-title-content ">--><!--                  <i class="material-icons">person</i>--><!--                  <p style="margin-top: 5px;">Profile</p>--><!--                </a>--><!--              </div>-->
                </div>
            </div>
        </div>
    </div>
    <!-- footer ends-->

    </script>
</body>

</html> --}}
