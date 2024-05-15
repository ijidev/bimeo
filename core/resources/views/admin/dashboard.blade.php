@extends('layouts.front_layout')
@section('title')
    Dashboard
@endsection

@section('content')

 <div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h4>Total Users:</h4>
                <h5>{{ $user->count() }}</h5>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h4>Active Users:</h4>
                <h5>{{ $active }}</h5>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h4>Inactive Users:</h4>
                <h5>{{ $inactive }}</h5>
            </div>
        </div>
    </div>
 </div>

 <div class="card">
    <div class="card-header">
        <h5 class="card-title">Pending Withdrawal Request</h5>
    </div>
    
    <div class="table-responsive">
            <table class="table" style=" overflow : auto;">
                <thead class="thead-dark">
                    <tr>
                        <th>UserName</th>
                        <th>wallet</th>
                        <th>address</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Manage</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($withdraws as $item)
                        <tr>
                            {{-- {{ dd($item->wallet) }} --}}
                            <td>{{ $item->user->name }}</td>
                            <td>{{ $item->wallet->wallet }}</td>
                            <td>{{ $item->wallet->address }}</td>
                            <td>${{ $item->amount }}</td>
                            <td>{{ $item->status }}</td>
                            <td>
                                <div class="dropdown">
                                    <button id="my-dropdown" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Manage</button>
                                    <div class="dropdown-menu" aria-labelledby="my-dropdown">
                                        <a class="dropdown-item active" href="{{ route('approve', $item->id) }}">Approve</a>
                                        <a class="dropdown-item active" href="{{ route('decline',$item->id) }}">Decline</a>
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

{{-- <div id="my-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h5>Payment Proof</h5>
                <img src="{{ asset('uploads/proof/'. $item->proof) }}" width="400" alt="PaymentProof">
                <div class="row">
                    
                    <div class="col-4">
                        <h5>
                            User Name:
                        </h5>
                    </div>
                    <div class="col-8">
                        <h6>
                            {{ $item->user->name }}
                        </h6>
                    </div>

                    <div class="col-4">
                        <h5>
                            Amount:
                        </h5>
                    </div>
                    <div class="col-8">
                        <h6>
                            ${{ $item->amount }}
                        </h6>
                    </div>

                    <div class="col-4">
                        <h5>
                            Status:
                        </h5>
                    </div>
                    <div class="col-8 text-white">
                        <h6>
                            @if ($item->is_approved == true)
                                <div class="badge bg-success">Approved</div>
                            @else
                                <div class="badge bg-info">Pending</div>
                            @endif
                        </h6>
                    </div>
                </div>
                    @if ($item->is_approved == true)
                        <div class="badge bg-success">Approved</div>
                        <button href="{{ route('approve.deposit',$item->id) }}" disabled class="btn btn-info">Deposit Approved</button>
                    @else
                        <a href="{{ route('approve.deposit',$item->id) }}" class="btn btn-info">Approve Deposit</a>
                    @endif
            </div>
        </div>
    </div>
</div> --}}