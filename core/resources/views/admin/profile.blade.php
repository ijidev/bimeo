@extends('layouts.front_layout')
@section('title')
    Settings
@endsection 
@section('content')

 <div class="card">
    <div class="card-header">
        <h5>
            Profile
        </h5>
    </div>
    <div class="card-body">
        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
         @csrf
         <div class="row">
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="" class="form-label">User name</label>
                    <input
                        type="text"
                        class="form-control"
                        name="username"
                        value="{{ $user->name }}"
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    <small id="helpId" class="form-text text-muted">Update admin loging username</small>
                </div>
            </div>
            
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="" class="form-label">Password</label>
                    <input
                        type="password"
                        class="form-control"
                        name="password"
                        {{-- value="" --}}
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    <small id="helpId" class="form-text text-muted">Update admin loging Password</small>
                </div>
            </div>
        </div>
        
        <div class="mb-3">
            <label for="" class="form-label">Comfirm old Password</label>
            <input
                type="password"
                class="form-control"
                name="old_password"
                {{-- value="" --}}
                aria-describedby="helpId"
                placeholder=""
            />
            <small id="helpId" class="form-text text-muted">Comfirm old Password to Proceed</small>
        </div>
         <div class="text-center">
             <button type="submit" style="width: 50%;" class="btn btn-primary">
                 Submit
             </button>
         </div>
        
        </form>
    </div>
 </div>
@endsection