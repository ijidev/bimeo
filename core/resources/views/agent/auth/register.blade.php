@extends('agent.layout.auth')
@section('content')
    <div class="card " style="margin:50px 50px ">
        {{-- <img class="card-img-top" src="holder.js/100px180/" alt="Title" /> --}}
        <div class="card-body">
            <h4 class="card-title">Bimeo Agent Registeretion</h4>
            <div class="card-text">
                <form method="post" action="{{ route('agent.signup') }}">
                    @csrf

                    <div class="row mb-3">
                        <label for="name" class="col-4 col-form-label test-dark text-md-end">{{ __('Username') }}</label>

                        <div class="col-8">
                            <input id="name" type="text" placeholder="username ...." class="form-control test-dark @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <!-- div class="row mb-3">
                        <label for="email" class="col-4 col-form-label test-dark text-md-end">{{ __('Email Address') }}</label>
                        <div class="col-8">
                            <input id="email" type="email" placeholder="Email address..." class=" form-control test-dark @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div -->

                    <div class="row mb-3">
                        <label for="password" class="col-4 col-form-label  test-dark text-md-end">{{ __('Password') }}</label>

                        <div class="col-8">
                            <input id="password" type="password" placeholder="Password..." class="form-control test-dark @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password-confirm" class="col-4 col-form-label test-dark text-md-end">{{ __('Confirm Password') }}</label>

                        <div class="col-8">
                            <input id="password-confirm" type="password" placeholder="Re-enter Password..." class="form-control test-dark" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    {{-- <div class="row mb-3">
                        <label for="withdrawal-password" class="col-4 col-form-label test-dark text-md-end">{{ __('Withdrawal Password') }}</label>

                        <div class="col-8">
                            <input id="withdrawal-password" type="password" placeholder="Password for withdrawal..." class="form-control test-dark" name="withdrawal_password" required autocomplete="new-password">
                        </div>
                    </div> --}}

                    <div class="row mb-3">
                        <label for="gender" class="col-4 col-form-label test-dark text-md-end">{{ __('Gender') }}</label>

                        <div class="col-8">
                            <select class="form-control test-dark" name="gender" required>
                                <option value="Male">Male</option>
                                <option value="Male">Female</option>
                            </select>
                            <!--<input id="withdrawal-password" type="password" placeholder="Password for withdrawal..." class="form-control test-dark" name="withdrawal_password" required autocomplete="new-password">-->
                        </div>
                    </div>

                    <div class="row mb-3">
                        
                        <label for="ref_code" class="col-4 test-dark col-form-label text-md-end">{{ __('Member ID') }}</label>
                        <div class="col-8">
                            <input id="ref_code" type="text" placeholder="Member ID..." class="form-control  test-dark @error('ref_code') is-invalid @enderror" name="ref_code" value="{{ old('ref_code') }}">
                            @error('ref_code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row text-center">
                        <div class="col-6">
                            <button class="btn btn-primary" type="submit">register</button>
                        </div>

                        <div class="col-6">
                            <a href="{{ route('agent.login') }}" class="btn btn-info">Alrady have an account? Sing in</a>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
    
@endsection