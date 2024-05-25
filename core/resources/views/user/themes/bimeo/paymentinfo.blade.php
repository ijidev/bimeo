@extends('user.themes.bimeo.layouts.base')

@section('head')
    {{-- <link rel="stylesheet" href="{{ asset('frontassets/login.css') }}">
    <link rel="stylesheet" href="{{ asset('frontassets/custom.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .footer {
            display: none;
        }
    </style>
@endsection


@section('content')

<div class="card">
        <div class="row text-center" style="background: lightblue; color:white;">
            <div class="col-6 ">
                <a href="{{ route('info') }}">Crypto Wallet</a>
            </div>

            <div class="col-6 ">
                <a href="{{ route('bank') }}">Wire Transfar</a>
            </div>
        </div>
</div>


    @if ($infos->count() < 1)
        <form action="{{ route('info.add') }}">
            @csrf
            <hr>
            <div class="text-center">
                {{$title}}
            </div>
            <hr>
            
            <div class="mb-3 row">
                <div class="col-sm-4">
                    <label for="" class="form-label">{{$wallet}}</label>
                </div>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="wallet" value="" id=""
                        requried aria-describedby="helpId" placeholder="{{$wallet}}">
                    <input type="text" class="form-control" hidden name="type" value="{{$type}}" id=""
                        requried aria-describedby="helpId" placeholder="{{$type}}">
                </div>
            </div>

            <div class="mb-3 row">
                <div class="col-sm-4">
                    <label for="" class="form-label">{{$address}}</label>
                </div>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="address" value="" id=""
                    aria-describedby="helpId" placeholder="{{$address}}">
                </div>
            </div>

            <div class="mb-3 row">
                <div class="col-sm-4">
                    <label for="" class="form-label">Recipient Name</label>
                </div>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="recipient" value="" aria-describedby="helpId"
                        placeholder="Recipient">
                </div>
            </div>

            
            <div class="mb-3 row">
                <div class="col-sm-4">
                    <label for="" class="form-label">Phone Number</label>
                </div>
                <div class="col-sm-8">
                    <input type="number" class="form-control" name="phone" value="" id=""
                        aria-describedby="helpId" placeholder="Phone Number">
                </div>
            </div>


            <br>
            
            <hr>
            <div class="text-center">
                confirm withdrawal Password
            </div>
            <hr>

            <div class="mb-3 row">
                <div class="col-sm-4">
                    <label for="" class="form-label">Withdrawal Password</label>
                </div>
                <div class="col-sm-8">
                    <input type="password" class="form-control" name="password" id="" aria-describedby="helpId"
                        placeholder="Withdrawal Password">
                </div>
            </div>



            <button class="btn btn-info" style="width:90%;" type="submit">Bind</button>
        </form>


    @else


        @php
            $info = $infos->first();
        @endphp
        <form action="{{ route('info.store', $info->id) }}" class="text-center">
            @csrf
            <hr>
            <div class="text-center">
                {{$title}}
            </div>
            <hr>

            <div class="mb-3 row">
                <div class="col-sm-4">
                    <label for="" class="form-label">{{$wallet}}</label>
                </div>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="wallet" value="{{ $info->wallet }}" id=""
                        requried aria-describedby="helpId" placeholder="{{$wallet}}">
                </div>
            </div>

            <div class="mb-3 row">
                <div class="col-sm-4">
                    <label for="" class="form-label">{{$address}}</label>
                </div>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="address" value="{{ $info->address }}" id=""
                    aria-describedby="helpId" placeholder="{{$address}}">
                </div>
            </div>

            <div class="mb-3 row">
                <div class="col-sm-4">
                    <label for="" class="form-label">Recipient Name</label>
                </div>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="recipient" value="{{ $info->recipient  }}" aria-describedby="helpId"
                        placeholder="Recipient">
                </div>
            </div>

            
            <div class="mb-3 row">
                <div class="col-sm-4">
                    <label for="" class="form-label">Phone Number</label>
                </div>
                <div class="col-sm-8">
                    <input type="number" class="form-control" name="phone" value="{{ $info->phone }}" id=""
                        aria-describedby="helpId" placeholder="Phone Number">
                </div>
            </div>


            <br>
            
            <hr>
            <div class="text-center">
                confirm withdrawal Password
            </div>
            <hr>

            <div class="mb-3 row">
                <div class="col-sm-4">
                    <label for="" class="form-label">Withdrawal Password</label>
                </div>
                <div class="col-sm-8">
                    <input type="password" class="form-control" name="password" id="" aria-describedby="helpId"
                        placeholder="Withdrawal Password">
                </div>
            </div>


            <button class="btn btn-info" style="width:90%;" type="submit">Update</button>
        </form>

    @endif
@endsection
