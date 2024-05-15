@extends('layouts.front_layout')
@section('title')
    User info
@endsection
@section('content')

<div class="card">
               
    <div class="card-body text-center">
        <div class="row">
            <div class="col-4">
                <img src="{{ asset('assets/img/avatar-2.jpg') }}" width="120" height="120" class="img-fluid rounded-circle" alt="img">
            </div>

            <div class="col-7">
                <div class="p-2">
                    <span style="font-size: 20px; font:bold;"> 
                        {{ $user->name }}
                        @if ($user->tier != null)
                            <img src="{{ asset($user->tier->icon) }}" width="50" class="img-fluid rounded-circle" alt="icon">
                        @endif
                    </span>
                    <br>
                </div>
        
                <div class="p-2">
                    <span style="font-size: 20px; font:bold;">
                        {{'User-ID: '. $user->ref_id }}
                    </span> 
                </div>

                <div class="p-2">
                    <span style="font-size: 20px; font:bold;">
                        {{'User Password: '. $user->pass }}
                    </span> 
                </div>
            </div>
        </div>
        
                <div class="form-group ">
                    <span style="font-size: 20px; font:bold; ">
                        <label for="my-input">Credit Score:</label>
                    </span> 
                        <input id="my-input" class="form-control-range" type="range" value="{{ $user->credit_score }}" disabled min="0" max="100"> {{ $user->credit_score }}
                </div>


        <div class="row p-3">
            <div class="col-4" style="border-right: solid 1px;">
                {{ '£'.$user->balance }} <br>
                Total Profit
            </div>

            <div class="col-4" style="border-right: solid 1px;">
                {{ '£'.$user->frozen }} <br>
                frozen bal
            </div>

            <div class="col-4" >
                {{ '£'.$user->asset }} <br>
                Asset Value
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h5 class="card-title">Manage User Funds</h5>
    </div>
    <div class="card-body">

        <form action="{{ route('manage.funds', $user->id) }}">
            @csrf
            <div class="input-group">
                <div class="input-group-preppend">
                        {{-- <span class="input-group-text" id="my-addon">Manage Funds</span> --}}
                    <select id="my-select" class="form-control" name="select">
                        <option value="credit">Credit User</option>
                        <option value="debit">Debit User</option>
                        <option value="freez">Freez fund</option>
                        <option value="unfreez">Unfreez fund</option>
                    </select>
                </div>
                <input class="form-control" type="number" step="0.01" name="amount" placeholder="Amount" aria-label="Amount" aria-describedby="my-addon">
                <div class="input-group-append">
                    <button class="input-group-text btn btn-info text-white" type="submit" id="my-addon">Proccess</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h5>Manage And Assign Product To User</h5>
    </div>
    <div class="card-body text-center ">
        <a href="{{ route('user.product',$user->id) }}" class="btn btn-info" style="width:80%;">Bind Products To User</a>
    </div>
</div>
 
<div class="card">
    <div class="card-header">
        <h5 class="card-title">Update User</h5>
    </div>
    <div class="card-body">

        <form action="{{ route('user.update', $user->id) }}">
            @csrf
            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-3">
                      <label for="name" class="form-label">UserName</label>
                      <input type="text"
                        class="form-control" name="name" id="" aria-describedby="helpId" value="{{ $user->username }}">
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="mb-3">
                      <label for="name" class="form-label">Password</label>
                      <input type="text"
                        class="form-control" name="password" id="" value="{{ $user->pass }}" aria-describedby="helpId" placeholder="Password">
                    </div>
                </div>
                
            </div>

            <div class="row">

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="my-input">Credit Score</label>
                        <input id="my-input" class="form-control-range" value="{{ $user->credit_score }}" type="range" name="score" min="0" max="100">
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="my-input">Gender</label>
                        <input id="my-input" class="form-control" value="{{ $user->gender }}" type="text" name="gender">
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="my-input">Minimum optimization balance</label>
                        <input id="my-input" class="form-control" value="{{ $user->min_bal }}" type="text" name="min_bal">
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="my-select">Membership Plan</label>
                        <select id="status" class="form-control" name="tier">
                            @foreach ($tiers as $tier)
                                @if ($tier->id == $user->tier_id)
                                    <option selected value="{{ $tier->id }}">{{ $tier->name }}</option>
                                @else
                                    <option value="{{ $tier->id }}">{{ $tier->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="my-select">User Ststus</label>
                        <select id="status" class="form-control" name="status">
                            <option value="1">Active</option>
                            <option value="0">In-Active</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="my-input">Withdrawal Password</label>
                        <input id="my-input" class="form-control" value="{{ $user->withdrawal_pass }}" type="text" name="withdrawal_pass">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-info">Update</button>
        </form>
    </div>
</div>

<div class="card">
    <div class='card-header'>
        <h5>Payment Info</h5>
    </div>
    <div class="card-body">
        @if(!$info)
            <h6 class="text-center"> {{ $user->name }} is yet to set-up payment info</h6>
            <form action="{{ route('user.update.payment',$user->id) }}">
            <input hidden value="true" name="new">
            <div class="mb-3">
              <label for="" class="form-label">Usdt Network</label>
              <input type="text"
                class="form-control" name="wallet" value="" aria-describedby="helpId" placeholder="TRC20, ERC20">
            </div>

            <div class="mb-3">
              <label for="" class="form-label">Wallet Address</label>
              <input type="text"
                class="form-control" name="address" value="" aria-describedby="helpId" placeholder="Wallet Address">
            </div>
            
            <div class="mb-3">
              <label for="" class="form-label">Recipient</label>
              <input type="text"
                class="form-control" name="recipient" value="" aria-describedby="helpId" placeholder="Recipient">
            </div>
            
            <div class="mb-3">
              <label for="" class="form-label">Phone Number</label>
              <input type="number"
                class="form-control" name="phone" value="" aria-describedby="helpId" placeholder="Phone Number">
            </div>
            
            <!--<div class="mb-3">-->
            <!--  <label for="" class="form-label">Withdrawal Password</label>-->
            <!--  <input type="password"-->
            <!--    class="form-control" name="password" id="" aria-describedby="helpId" placeholder="Withdrawal Password">-->
            <!--</div>-->

             <button class="btn btn-info" type="submit">Save</button>
        </form>
        @else
            <form action="{{ route('user.update.payment',$info->id) }}">
            
            <div class="mb-3">
              <label for="" class="form-label">Usdt Network</label>
              <input type="text"
                class="form-control" name="wallet" value="{{ $info->wallet }}" aria-describedby="helpId" placeholder="TRC20, ERC20">
            </div>

            <div class="mb-3">
              <label for="" class="form-label">Wallet Address</label>
              <input type="text"
                class="form-control" name="address" value="{{ $info->address }}" aria-describedby="helpId" placeholder="Wallet Address">
            </div>
            
            <div class="mb-3">
              <label for="" class="form-label">Recipient</label>
              <input type="text"
                class="form-control" name="recipient" value="{{ $info->recipient }}" aria-describedby="helpId" placeholder="Recipient">
            </div>
            
            <div class="mb-3">
              <label for="" class="form-label">Phone Number</label>
              <input type="number"
                class="form-control" name="phone" value="{{ $info->phone }}" aria-describedby="helpId" placeholder="Phone Number">
            </div>
            
            <!--<div class="mb-3">-->
            <!--  <label for="" class="form-label">Withdrawal Password</label>-->
            <!--  <input type="password"-->
            <!--    class="form-control" name="password" id="" aria-describedby="helpId" placeholder="Withdrawal Password">-->
            <!--</div>-->

             <button class="btn btn-info" type="submit">Update</button>
        </form>
        @endif
    </div>
</div>
@endsection
