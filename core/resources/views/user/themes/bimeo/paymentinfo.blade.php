@extends('user.themes.bimeo.layouts.base')

@section('head')
    {{-- <link rel="stylesheet" href="{{ asset('frontassets/login.css') }}">
    <link rel="stylesheet" href="{{ asset('frontassets/custom.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
@endsection


@section('content')
    @if ($infos->count() < 1)
        <form action="{{ route('info.add') }}">
                @csrf
            <hr>
                Crypto Wallet
            <hr>     

            <div class="mb-3">
            <label for="" class="form-label">Wallet</label>
            <input type="text"
                class="form-control" name="wallet" id="" requried aria-describedby="helpId" placeholder="TRC20, ERC20">
            </div>

            <div class="mb-3">
            <label for="" class="form-label">Wallet Address</label>
            <input type="text"
                class="form-control" name="address" id=""   aria-describedby="helpId" placeholder="Wallet Address">
            </div>
        
            
            <div class="mb-3">
            <label for="" class="form-label">Phone Number</label>
            <input type="number"
                class="form-control" name="phone" id=""   aria-describedby="helpId" placeholder="Phone Number">
            </div>


            <br>
            <br>

            <hr>
                Wire Transfar
            <hr>

                <div class="mb-3">
                <label for="" class="form-label">Bank Name</label>
                <input type="text"
                    class="form-control" name="bank" id=""   aria-describedby="helpId" placeholder="Bank Name">
                </div>
                
                <div class="mb-3">
                <label for="" class="form-label">Account Number</label>
                <input type="account"
                    class="form-control" name="account" id=""   aria-describedby="helpId" placeholder="Account Number">
                </div>
                
                <div class="mb-3">
                <label for="" class="form-label">Recipient Name</label>
                <input type="text"
                    class="form-control" name="recipient" id=""   aria-describedby="helpId" placeholder="Recipient">
                </div>

                <br>
                <br>
                <br>
            <hr>
                confirm withdrawal Password
            <hr>
            
            <div class="mb-3">
            <label for="" class="form-label">Withdrawal Password</label>
            <input type="password"
                class="form-control" name="password" id=""   aria-describedby="helpId" placeholder="Withdrawal Password">
            </div>
            
            
            <button class="btn btn-info" style="width:90%;" type="submit">Bind</button>
        </form>
        @else
            @php
            $info = $infos->first();
            @endphp
            <form action="{{ route('info.store',$info->id) }}">
                    @csrf
                <hr>
                    Crypto Wallet
                <hr>     

                <div class="mb-3">
                <label for="" class="form-label">Waallet</label>
                <input type="text"
                    class="form-control" name="wallet" value="{{ $info->wallet }}" id="" requried aria-describedby="helpId" placeholder="TRC20, ERC20">
                </div>

                <div class="mb-3">
                <label for="" class="form-label">Wallet Address</label>
                <input type="text"
                    class="form-control" name="address" value="{{ $info->address }}" id=""   aria-describedby="helpId" placeholder="Wallet Address">
                </div>
            
                
                <div class="mb-3">
                <label for="" class="form-label">Phone Number</label>
                <input type="number"
                    class="form-control" name="phone" value="{{ $info->phone }}" id=""   aria-describedby="helpId" placeholder="Phone Number">
                </div>
                
                <br>
                <br>
                <br>
                <hr>
                    confirm withdrawal Password
                <hr>
                
                <div class="mb-3">
                <label for="" class="form-label">Withdrawal Password</label>
                <input type="password"
                    class="form-control" name="password" id=""   aria-describedby="helpId" placeholder="Withdrawal Password">
                </div>
                
                
                <button class="btn btn-info" style="width:90%;" type="submit">Update</button>
            </form>

                <hr>
                    Wire Transfar
                <hr>
                
            <form action="{{ route('info.store',$info->id) }}">
                @csrf
                    <div class="mb-3">
                    <label for="" class="form-label">Bank Name</label>
                    <input type="text"
                        class="form-control" name="bank" id="" value="{{ $info->bank }}"   aria-describedby="helpId" placeholder="Bank Name">
                    </div>
                    
                    <div class="mb-3">
                    <label for="" class="form-label">Account Number</label>
                    <input type="number"
                        class="form-control" name="account" id="" value="{{ $info->account }}"   aria-describedby="helpId" placeholder="Account Number">
                    </div>
                    
                    <div class="mb-3">
                    <label for="" class="form-label">Recipient Name</label>
                    <input type="text"
                        class="form-control" name="recipient" id="" value="{{ $info->recipient }}"   aria-describedby="helpId" placeholder="Recipient">
                    </div>

                    <br>
                    <br>
                    <br>
                <hr>
                    confirm withdrawal Password
                <hr>
                
                <div class="mb-3">
                <label for="" class="form-label">Withdrawal Password</label>
                <input type="password"
                    class="form-control" name="password" id=""   aria-describedby="helpId" placeholder="Withdrawal Password">
                </div>
                
                
                <button class="btn btn-info" style="width:90%;" type="submit">Update</button>
            </form>
        @endif




@endsection