@extends('layouts.front_layout')
@section('title')
    Users
@endsection
@section('content')

 <div class="card">
    <div class="card-body table-responsive">
        <table class="table table-bark ">
            <thead class="thead-light">
                <tr>
                    <th>S/N</th>
                    <th>Username</th>
                    <th>Membership</th>
                    <th>Total Recharge</th>
                    <th>Total withdrawal</th>
                    <th>Mission Count</th>
                    <th>Overall Missions</th>
                    <th>Reset Count</th>
                    {{-- <th>Last login</th> --}}
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

                        {{-- total recharge --}}
                        <td>{{'$'. $user->total_recharge }}</td>

                        {{-- total withdrawal --}}
                        <td>{{ '$'. $withdraw->where('user_id', $user->id)->sum('amount') }}</td>

                        {{-- mission --}}
                        @if ($user->tier == null)
                            <td>Null</td>
                        @else
                            <td>{{$user->optimized .'/'. $user->tier->daily_optimize }}</td>
                        @endif

                        {{-- Overall mission --}}
                        <td>{{ $user->total_optimized }}</td>

                        {{-- Mission reset count--}}
                        @if ($user->tier == null)
                            <td>Null</td>
                        @else
                            <td>{{$user->reset_count .'/'. $user->tier->reset }}</td>
                        @endif

                        {{-- last login --}}
                        {{-- <td>
                            {{ $user->last_login }}
                        </td> --}}

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

@endsection
