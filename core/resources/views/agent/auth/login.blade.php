@extends('agent.layout.auth')
@section('content')
    <div class="card " style="margin:50px 50px ">
        {{-- <img class="card-img-top" src="holder.js/100px180/" alt="Title" /> --}}
        <div class="card-body">
            <h4 class="card-title">Bimeo Agent Login</h4>
            <div class="card-text">
                
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="row mb-3">
                        <label for="email" class="col-4 text-white col-form-label text-md-end">{{ __('Username') }}</label>

                        <div class="col-8">
                            <input id="username" type="text" placeholder="Enter your username..." class="form-control text-white @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password" class="col-4 col-form-label text-white text-md-end">{{ __('Password:') }}</label>

                        <div class="col-8">
                            <input id="password" type="password" placeholder="Password here.." class="text-white form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row text-center">
                        <div class="col-6">
                            <button class="btn btn-primary" type="submit">Sign in</button>
                        </div>

                        <div class="col-6">
                            <a href="{{route('agent.register')}}" class="btn btn-info">Dont have an account? Sing up</a>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
    
@endsection