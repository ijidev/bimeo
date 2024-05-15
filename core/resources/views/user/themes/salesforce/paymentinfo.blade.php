@extends('user.themes.salesforce.layouts.front')

@section('content')

@php
  $set = \App\Models\Setting::get()->first();
@endphp

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <!--<div class="card mt-3">-->
            <!--    <div class="card-header">-->
            <!--        <h5 class="card-title">My Details</h5>-->
            <!--    </div>-->
            <!--    <div class="card-body table-responsive">-->
            <!--        <table class="table table-dark">-->
            <!--            <thead>-->
            <!--                <tr>-->
            <!--                    <td>Wallet</td>-->
            <!--                    <td>Address</td>-->
            <!--                    <td>Delete</td>-->
            <!--                    <td>Edit</td>-->
            <!--                </tr>-->
            <!--            </thead>-->
            <!--            <tbody>-->
            <!--                @foreach ($infos as $info)-->
            <!--                    <tr>-->
            <!--                        <th>{{ $info->wallet . ' :' }} </th>-->
            <!--                        <th>{{ $info->address }}</th>-->
            <!--                        <th><a href="{{ route('info.remove',$info->id) }}" class="btn btn-danger">X</a></th>-->
            <!--                        <th><a href="{{ route('info.edit',$info->id) }}" class="btn bg-light">Edit</a></th>-->
            <!--                    </tr>-->
            <!--                @endforeach-->
            <!--            </tbody>-->
            <!--        </table>-->
            <!--    </div>-->
            <!--</div>-->
            
            <div class="card mt-3">
                <div class="card-body ">
                    @if ($infos->count() < 1)
                    <form action="{{ route('info.add') }}">
                        
                        <div class="mb-3">
                          <label for="" class="form-label">USDT Network</label>
                          <input type="text"
                            class="form-control" name="wallet" id="" requried aria-describedby="helpId" placeholder="TRC20, ERC20">
                        </div>

                        <div class="mb-3">
                          <label for="" class="form-label">Wallet Address</label>
                          <input type="text"
                            class="form-control" name="address" id="" required aria-describedby="helpId" placeholder="Wallet Address">
                        </div>
                        
                        <div class="mb-3">
                          <label for="" class="form-label">Recipient</label>
                          <input type="text"
                            class="form-control" name="recipient" id="" required aria-describedby="helpId" placeholder="Recipient">
                        </div>
                        
                        <div class="mb-3">
                          <label for="" class="form-label">Phone Number</label>
                          <input type="number"
                            class="form-control" name="phone" id="" required aria-describedby="helpId" placeholder="Phone Number">
                        </div>
                        
                        <div class="mb-3">
                          <label for="" class="form-label">Withdrawal Password</label>
                          <input type="password"
                            class="form-control" name="password" id="" required aria-describedby="helpId" placeholder="Withdrawal Password">
                        </div>
                        
                        
                        <button class="btn btn-info" style="width:90%;" type="submit">Bind</button>
                    </form>
                    @else
                    @php
                        $info = $infos->first();
                    @endphp
                    <form action="{{ route('info.store',$info->id) }}">
                        
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
                        
                        <div class="mb-3">
                          <label for="" class="form-label">Withdrawal Password</label>
                          <input type="password"
                            class="form-control" name="password" id="" aria-describedby="helpId" placeholder="Withdrawal Password">
                        </div>

                        <!-- button class="btn btn-success" type="submit">Update</button -->
                    </form>
                    <!--p> contact support to update payment information</p>
                    <a href="{{'https://api.whatsapp.com/send?phone='. $set->chat }}" style="width:90%;" class="btn btn-info m-2">Online Support</a-->

                    @endif
                </div>
            </div>


        </div>
    </div> 
</div>

@endsection