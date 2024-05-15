@extends('user.themes.salesforce.layouts.front')

@section('title')

@endsection

@section('content')

<style>
.nav {
    display: flex;
    justify-content: center ; /* Adjust this property to control the horizontal alignment */
    /* Other styling as needed */
}

.nav-link {
    color:black;
    /* Other styling for individual items */
}

.active {
    border-bottom: 2px solid skyblue;
    color: skyblue;
}


</style>

    <div class="row justify-content-center">
        <div class="col-md-8">

        <div class="row mb-4 text-center">
            
        
        <ul class="nav">
    <li class="nav-item">
        <a class="nav-link @if(Route::is('record')) active @endif" href="{{ route('record') }}">All</a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if(Route::is('record.pending')) active @endif" href="{{ route('record.pending') }}">Pending</a>
    </li>
    <!--li class="nav-item">
        <a class="nav-link @if(Route::is('record.frozen')) active @endif" href="{{ route('record.frozen') }}">Frozen</a>
    </li-->
    <li class="nav-item">
        <a class="nav-link @if(Route::is('record.completed')) active @endif" href="{{ route('record.completed') }}">Approved</a>
    </li>
    <!-- Add more menu items as needed -->
</ul>

</div>
            @foreach ($records as $record)

            <div class="row">
                <div class="col-6">
                    {{ $record->created_at }}
                </div>
                <div class="col-6 text-center ">
                    @if ($record->status == 'approved')
                    <div style="
                        Padding:2px;
                        border:solid green 1px;
                        border-radius:10px;
                    ">
                        {{ $record->status }}
                    </div>
                    @elseif ($record->status == 'frozen')
                    <div style="
                        padding: 2px;
                        border:solid red 1px;
                        border-radius:10px;
                    ">
                        {{ $record->status }}
                    </div> 
                    <!-- a href="{{ route('submit', $record->id) }}" class="btn btn-info"> Submit </a -->
                    @elseif ($record->status == 'pending')
                    <div style="
                        padding:2px;
                        border:solid orange 1px;
                        border-radius:10px;
                    ">
                        {{ $record->status }}
                    </div> 
                        @if($record->user->asset < 0)
                            <a href="{{ route('contact') }}" class="btn btn-info"> Top up </a>
                        @else
                            <a href="{{ route('submit', $record->id) }}" class="btn btn-info"> Submit </a>
                        @endif
                    @endif
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-2">
                            <img src="{{ asset($record->product->img) }}" width="50" height="50" class="rounded-circl rounded-top rounded-bottom" alt="Product-img">
                        </div>
                        <div class="col-10">
                            {{ $record->product->name }}
                        </div>
                    </div>   
                    <hr>
                    <div class="row text-center">
                        <div class="col-6">
                            <h6>Total Amount</h6>
                            @if($record->price == null)
                                £{{ $record->product->price }}
                            @else
                                £{{ $record->price }}
                            @endif
                        </div>
                        <div class="col-6">
                            <h6>Profit</h6>
                            @if($record->price == null)
                              £{{ $record->product->price / 100 * Auth::user()->tier->percent }}
                            @else
                              £{{ $record->price / 100 * Auth::user()->tier->percent * 10}}
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection