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
                <div class="p-2">
                    <span style="font-size: 20px; font:bold;"> 
                        {{ $user->name }}
                    </span>
                    <br>
                </div>
            </div>

            <div class="col-7">
        
                <div class="p-2">
                    <span style="font-size: 20px; font:bold;">
                        {{'AGENT-ID: '. $user->ref_id }}
                    </span> 
                </div>

                <div class="p-2">
                    <span style="font-size: 20px; font:bold;">
                        {{'Agent Login Password: '. $user->pass }}
                    </span> 
                </div>
            </div>
        </div>
        
                {{-- <div class="form-group ">
                    <span style="font-size: 20px; font:bold; ">
                        <label for="my-input">Credit Score:</label>
                    </span> 
                        <input id="my-input" class="form-control-range" type="range" value="{{ $user->credit_score }}" disabled min="0" max="100"> {{ $user->credit_score }}
                </div> --}}

                <hr>
        <div class="row p-3">
            <div class="col-4" style="border-right: solid 1px;">
                {{ ' $'.$user->balance }} <br>
                Total Profit
            </div>

            <div class="col-4" style="border-right: solid 1px;">
                {{ ' $'.$user->frozen }} <br>
                Frozen bal
            </div>

            <div class="col-4" >
                {{ ' $'.$user->asset }} <br>
                Total Balance
            </div>
        </div>

        <div class="row p-3">
            <div class="col-4" style="border-right: solid 1px;">
                {{ $downlines->count() }} <br>
                Total Downline
            </div>

            <div class="col-4" style="border-right: solid 1px;">
                {{ ' $'.$downlines->sum('total_recharge') }} <br>
                Total downline Recharge
            </div>

            <div class="col-4" >
                {{ $downlines->sum('balance') }} <br>
                Total downline Profit
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
    <h6 class="card-text card-header">
        {{$user->name . '\'s'}} Downline
    </h6>
    <div class="card-body table-responsive">
        <table class="table table-bark ">
            <thead>
            </thead>
            <thead class="thead-light no-warp">
                <tr>
                    <th>S/N</th>
                    <th>Username</th>
                    <th>Membership</th>
                    {{-- <th>Owning Agent</th> --}}
                    <th>Total Recharge</th>
                    <th>Total withdrawal</th>
                    <th>Mission Count</th>
                    <th>Overall Missions</th>
                    {{-- <th>Reset Count</th> --}}
                    <th>Joined at</th>
                    <th>Status</th>
                    <th>Manage</th>
                </tr>
            </thead>
            <tbody>
                @php
                  $sn = 1;  
                @endphp
                @foreach ($downlines as $user)
                    <tr>
                        <td>{{$sn ++}} </td> 

                        <td>{{ $user->name }}</td>

                        @if ($user->tier == null)
                            <td>Null</td>
                        @else
                            <td>{{ $user->tier->name }}</td>
                        @endif

                        {{-- <td>
                            @if ($user->parent == null)
                            
                            @else
                                {{ $user->parent->name }}
                            @endif
                        </td> --}}

                        {{-- total recharge --}}
                        <td>{{'$ '. $user->total_recharge }}</td>

                        {{-- total withdrawal --}}
                        <td>{{ '$ '. $withdraw->where('user_id', $user->id)->sum('amount') }}</td>

                        {{-- mission --}}
                        @if ($user->tier == null)
                            <td>Null</td>
                        @else
                            <td>{{$user->optimized .'/'. $user->tier->daily_optimize }}</td>
                        @endif

                        {{-- Overall mission --}}
                        <td>{{ $user->total_optimized }}</td>

                        {{-- Mission reset count--}}
                        {{-- @if ($user->tier == null)
                            <td>Null</td>
                        @else
                            <td>{{$user->reset_count .'/'. $user->tier->reset }}</td>
                        @endif --}}

                        {{-- last login --}}
                        <td>
                            {{ $user->created_at }}
                        </td>

                        <td>
                            @if ($user->is_active == true)
                                <div class="badge badge-success">Active</div>
                            @else
                              <div class="badge badge-info">In-Active</div> 
                            @endif
                        </td>
                        <td>
                            <div class="dropdown">
                                <button id="my-dropdown" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Manage</button>
                                <div class="dropdown-menu" aria-labelledby="my-dropdown">
                                    <a class="dropdown-item" href="{{ route('user', $user->id) }}">Manage</a>
                                    <a class="dropdown-item" href="{{ route('reset', $user->id) }}">Reset</a>
                                    <a class="dropdown-item" href="{{ route('delete.user', $user->id) }}">Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            
        </table>
    </div>
 </div>

{{-- <div class="card">
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
</div> --}}
@endsection
