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
                    <th>Username</th>
                    <th>Membership</th>
                    <th>Password</th>
                    <th>Optimize</th>
                    <th>Reset Count</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        @if ($user->tier == null)
                            <td>Null</td>
                        @else
                            <td>{{ $user->tier->name }}</td>
                        @endif
                        <td>{{ $user->pass }}</td>
                        @if ($user->tier == null)
                            <td>Null</td>
                        @else
                            <td>{{$user->optimized .'/'. $user->tier->daily_optimize }}</td>
                        @endif
                        @if ($user->tier == null)
                            <td>Null</td>
                        @else
                            <td>{{$user->reset_count .'/'. $user->tier->reset }}</td>
                        @endif
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
