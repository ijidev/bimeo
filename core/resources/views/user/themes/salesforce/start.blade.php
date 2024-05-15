@extends('user.themes.salesforce.layouts.front-header')
@section('content')
  
<!-- {{ date('H') }} -->
  <div class="task">
    <div>
      <h3>Optimise {{ '('.$user->optimized .'/'. $user->tier->daily_optimize .')' }}</h3>
    </div>
    
      <form action="{{ route('start') }}">
          <button type="submit">Start Now</button> 
      </form>
        
    
  </div>
  
  <div class="starting-container">
    <div class="starting-header">
      <h3>{{ $user->tier->name }}</h3>
      <h3>{{ $user->name }} <img src="{{asset($user->tier->icon)}}" width="30" alt="tier icon"> </h3>
    </div>
    <div class="starting-card">
      <div>
        <h4>Total Profit</h4>
        <p>£{{ $user->balance }}</p>
      </div>
      <p class="text">Accumulated Profit</p>
    </div>
    <div class="starting-card">
      <div>
        <h4>Reset count</h4>
        <p>{{ $user->reset_count . '/' . $user->tier->reset}}</p>
      </div>
      <p class="text">Tier reset count</p>
    </div>
    <div class="starting-card">
      <div>
        <h4>Asset value</h4>
        <p>£{{ $user->asset }}</p>
      </div>
      <p class="text">Accumulated Asset</p>
    </div>
  </div>
@endsection