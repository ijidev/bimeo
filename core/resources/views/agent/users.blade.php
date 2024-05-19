@extends('agent.layout.base')
@section('title')
    My Downline
@endsection
@section('content')

<div class="card">
               @php
                   $user = Auth::user()
               @endphp
    <div class="card-body text-center">
        <div class="row">
            <div class="col-4">
                <img src="{{ asset('assets/img/avatar-2.jpg') }}" width="120" height="120" class="img-fluid rounded-circle" alt="img">
            </div>

            <div class="col-7">
                <div class="p-2">
                    <span style="font-size: 20px; font:bold;"> 
                        {{ $user->name }}
                        {{-- @if ($user->tier != null)
                            <img src="{{ asset($user->tier->icon) }}" width="50" class="img-fluid rounded-circle" alt="icon">
                        @endif --}}
                    </span>
                    <br>
                </div>
        
                <div class="p-2">
                    <span style="font-size: 20px; font:bold;">
                        {{'My Referal ID: '. $user->ref_id }}
                    </span> 
                </div>

                {{-- <div class="p-2">
                    <span style="font-size: 20px; font:bold;">
                        {{'User Password: '. $user->pass }}
                    </span> 
                </div> --}}
            </div>
        </div>
        
                {{-- <div class="form-group ">
                    <span style="font-size: 20px; font:bold; ">
                        <label for="my-input">Credit Score:</label>
                    </span> 
                        <input id="my-input" class="form-control-range" type="range" value="{{ $user->credit_score }}" disabled min="0" max="100"> {{ $user->credit_score }}
                </div> --}}


        <div class="row p-3">
            <div class="col-4" style="border-right: solid 1px;">
                {{ ' $'.$user->balance }} <br>
                My Profit
            </div>

            <div class="col-4" style="border-right: solid 1px;">
                {{ ' $'.$user->frozen }} <br>
                Frozen bal
            </div>

            <div class="col-4" >
                {{ ' $'.$user->asset }} <br>
                My Balance
            </div>
        </div>

        <div class="row p-3">
            <div class="col-4" style="border-right: solid 1px;">
                {{ $users->count() }} <br>
                Total Downline
            </div>

            <div class="col-4" style="border-right: solid 1px;">
                {{ ' $'.$users->sum('total_recharge') }} <br>
                Total downline Recharge
            </div>

            <div class="col-4" >
                {{ $users->sum('balance') }} <br>
                Total downline Profit
            </div>
        </div>

        

    </div>
</div>

{{-- <div class="card" style="width:45%;">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <h6 class="card-subtitle mb-2 text-muted ">Card subtitle</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    
  </div>
</div> --}}


 <div class="card">
    <div class="card-body table-responsive">
        <table class="table table-bark ">
            <thead>
                <h6 class="card-text">
                    My Downline
                </h6>
            </thead>
            <thead class="thead-light no-warp">
                <tr>
                    <th>S/N</th>
                    <th>Username</th>
                    <th>Membership</th>
                    <th>Owning Agent</th>
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
                @foreach ($users as $user)
                    <tr>
                        <td>{{$sn ++}} </td> 

                        <td>{{ $user->name }}</td>

                        @if ($user->tier == null)
                            <td>Null</td>
                        @else
                            <td>{{ $user->tier->name }}</td>
                        @endif

                        <td>
                            @if ($user->parent == null)
                            
                            @else
                                {{ $user->parent->name }}
                            @endif
                        </td>

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
                                {{-- <button id="my-dropdown" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Manage</button>
                                <div class="dropdown-menu" aria-labelledby="my-dropdown"> --}}
                                    <a class="dropdown-item btn btn-primary" href="{{ route('agent.view', $user->id) }}">View</a>
                                    {{-- <a class="dropdown-item" href="{{ route('reset', $user->id) }}">Reset</a>
                                    <a class="dropdown-item" href="{{ route('delete.user', $user->id) }}">Delete</a> --}}
                                {{-- </div> --}}
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            
        </table>
    </div>
 </div>

@endsection
