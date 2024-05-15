@extends('layouts.front_layout')
@section('title')
    Users Products
@endsection
@section('content')

    <div class="card">
        <div class="card-header">
            <h5>Bind Product To User</h5>
        </div>
        <div class="card-body">
            
            <form method="post" action="{{ route('binduserProduct') }}">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="my-select">Select Product</label>
                            <select id="productId" class="form-control" name="productId">
                                @foreach ($products as $product)
                                    <option value="{{ $product->id }}">{{ $product->name . ' - £' .  $product->price}}</option> 
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="mb-3">
                          <label for="name" class="form-label">Set Product price for this user</label>
                          <input type="number"
                            class="form-control" name="price" step="0.01" id="" aria-describedby="helpId">
                            <input value="{{ $user->id }}" name="userId" hidden>
                        </div>
                    </div>
                    
                </div>
            
                <div class="text-center">
                    <button type="submit" style="width:90%;" class="btn btn-info">Bind Product</button>
                </div>
            
            </form>
            
        </div>
    </div>

 <div class="card">
    <div class="card-body table-responsive">
        <table class="table table-light  ">
            <thead class="thead-light">
                <tr>
                    <th>Image</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($userProducts as $item)
                    <tr>
                        <td><image src="{{ asset($item->product->img) }}" height="40" width="40"/> </td>
                        <td>{{ $item->product->name }}</td>
                       
                        <td>{{ $item->price }}</td>
                       
                       
                        <td>
                            <a class="badge bg-red text-white" href="{{ route('delete.user.product', $item->id) }}">X</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            
        </table>
    </div>
 </div>

@endsection
