@extends('user.themes.salesforce.layouts.front')

@section('content')

@php
  $set = \App\Models\Setting::get()->first();
@endphp
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

        <div class="card text-white">
            <div class="card-header">
                <h5>Edit Account Info</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('user.store',$user->id) }}">
                    @csrf
                    <div class="mb-3">
                      <label for="name" class="form-label">Username</label>
                      <input type="text"
                        class="form-control" name="name" disabled id="" aria-describedby="helpId" value="{{ $user->name }}">
                    </div>

                    <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input type="email"
                        class="form-control" name="email" id="" disabled aria-describedby="helpId" value="{{ $user->email }}">
                    </div>
                    
                    <div class="mb-3">
                      <label for="email" class="form-label">Gender</label>
                      <input type="email"
                        class="form-control" name="text" id="" disabled aria-describedby="helpId" value="{{ $user->gender }}">
                    </div>

                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password"
                        class="form-control" name="password" disabled id="" aria-describedby="helpId" placeholder="password">
                    </div>

                    <!-- button class="btn btn-success" type="submit">Update</button -->
                </form>
                
                <p class="card-title"> Contact support to update user information </p> <br>
                <a href="{{'https://api.whatsapp.com/send?phone='. $set->chat }}" class="btn btn-info">contact support</a>
            </div>
        </div>

        </div>
    </div>
</div>

@endsection