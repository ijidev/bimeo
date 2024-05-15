@extends('user.themes.bimeo.layouts.base')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">

                @foreach ($notification as $notify)
                    <div class="card text-white" style="background:white; margin:10px 0; padding:20px">
                        <div class="card-heade">
                            <h5 class="card-title">  <img src="{{ asset('frontassets/images/notify.png') }}" width="30" alt="notification"> {{ $notify->title }}</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">{{ $notify->massage }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection