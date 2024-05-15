@extends('user.themes.salesforce.layouts.front-header')

@section('content')

<div class="welcome justify-content-middle">
    <h3>Welcome Back</h3>
    <p>{{ $user->name }} <img src="{{asset($user->tier->icon)}}" width="30" alt="tier icon"> </p>
</div>

<div class="icon-list">
    
    <div class="icon-card">
        
        <a href="{{ route('checkin') }}">
            <div class="icon">
                <img src="{{ asset('frontassets/images/check-in.png') }}" width="25" height="25" alt="">
            </div>
            <br>Check-in
        </a>

    </div>
    
    
    <div class="icon-card">
        
        <a href="#" id="certModalBtn">
            <div class="icon">
                <img src="{{ asset('frontassets/images/cart.png') }}" width="25" height="25" alt="">
            </div>
            <br>Cert
        </a>

    </div>
    
    <div class="icon-card">
        
        <a href="{{ route('withdraw.pas') }}">
            <div class="icon">
                <img src="{{ asset('frontassets/images/withdrawal.png') }}" width="25" height="25" alt="">
            </div>
            <p>Withdrawal</p>
        </a>

    </div>
    
    <div class="icon-card">
        
        <a href="{{ route('membership') }}">
            <div class="icon">
                <img src="{{ asset('frontassets/images/Tiers.png') }}" width="25" height="25" alt="">
            </div>
            <p>Tiers</p>
        </a>

    </div>
    
    <div class="icon-card">
        
        <a href="#" id="openModalBtn">
            <div class="icon">
                <img src="{{ asset('frontassets/images/terms.png') }}" width="25" height="25" alt="">
            </div>
            <p>Terms</p>
        </a>

    </div>
    
    <div class="icon-card">
        
        <a href="#" id="eventModalBtn">
            <div class="icon">
                <img src="{{ asset('frontassets/images/event.png') }}" width="25" height="25" alt="">
            </div>
            <p>Event</p>
        </a>

    </div>
    
    <div class="icon-card">
        
        <a href="#" id="faqModalBtn">
            <div class="icon">
                <img src="{{ asset('frontassets/images/FAQ.png') }}" width="25" height="25" alt="">
            </div>
            <p>FAQ</p>
        </a>

    </div>
    
    <div class="icon-card">
        
        <a href="#" id="aboutModalBtn">
            <div class="icon">
                <img src="{{ asset('frontassets/images/about.png') }}" width="25" height="25" alt="">
            </div>
            <p>About</p>
        </a>

    </div>


    {{-- <div id="calendar"></div> --}}
</div>


{{-- <script type="text/javascript">
    $(document).ready(function() {
        $('#calendar').fullCalendar({

        })
    });
</script> --}}

<div class="tiers">
<div class="tiers-heading">
    <h4>Tiers</h4>
    <a href="{{ route('membership') }}">View All <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>
</div>
<div class="medal-container">
    @foreach ($tiers as $item)
        <div class="medal">
        <img src="{{ asset($item->icon) }}" alt="tire">
        </div>
    @endforeach
</div>
<hr>
<ul>
    {{-- {{ $tier->description }} --}}
    @if (Auth::user()->tier->name == 'Normal')
        {{ $user->tier->name }} users are assigned general usage access to data collection
        <li>Applicable to most data collection situations of light to medium level of usage involving the Products </li>
        <li>Profits of {{ $user->tier->percent }}% per Product - {{ $user->tier->daily_optimize }} products per set.</li>
        <li>No access to other premium features</li>
    @else (Auth::user()->tier->name == 'silver')
        {{ $user->tier->name }} users are assigned general usage access to data collection
        <li>Applicable to most data collection situations of light to medium level of usage involving the Products </li>
        <li>Profits of {{ $user->tier->percent }}% per Product - {{ $user->tier->daily_optimize }} products per set.</li>
        <li>Access to other premium features</li>
    @endif
        
</ul>
</div>

@include('user.themes.salesforce.includes._pop-up')
@endsection



