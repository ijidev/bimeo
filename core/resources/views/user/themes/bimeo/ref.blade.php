@extends('user.themes.bimeo.layouts.base')
@section('content')

    <div class="text-center" style="">
      <div class="text-center" style="margin-top: 50px;">
        <img src="{{ asset('bimeoassets/images/ds-logo.png')}}" style="" class="big-logo-size">
      </div>
      <div class="" style="display: flex; text-align:center; flex-direction: row;justify-content: center;width: 100%">
        <div class="" style="display: flex;flex-direction: column;width: 280px;height: 200px;">
            <span class="input-group-text" id="my-addon">Member-ID: {{ Auth::user()->ref_id }}</span>
            <input class="form-control" type="text" hidden id="memberId" disabled value="{{ Auth::user()->ref_id }}"  aria-describedby="my-addon">
            <div class="input-group-append">
                <button class="input-group-text btn btn-info text-white" style="background: lightblue; color:white; padding:10px; border-radius:20px;" onclick="myFunction()"><i class="fa fa-clipboard" aria-hidden="true"></i> copy ID</button>
            </div>
        </div>
      </div>
    </div>
    <div class="text-center" style="height: 60px;width: 100%;position:absolute;bottom: 0;left: 0">
    </div>
  </div>

  <script>
    function myFunction() {
      // Get the text field
      var copyText = document.getElementById("memberId");
    
      // Select the text field
      copyText.select();
      copyText.setSelectionRange(0, 99999); // For mobile devices
    
       // Copy the text inside the text field
      navigator.clipboard.writeText(copyText.value);
    
      // Alert the copied text
      alert("Member ID Copied Successfully : " + copyText.value);
    }
</script>
<style>
    .tooltip {
      position: relative;
      display: inline-block;
    }
    
    .tooltip .tooltiptext {
      visibility: hidden;
      width: 140px;
      background-color: #555;
      color: #fff;
      text-align: center;
      border-radius: 6px;
      padding: 5px;
      position: absolute;
      z-index: 1;
      bottom: 150%;
      left: 50%;
      margin-left: -75px;
      opacity: 0;
      transition: opacity 0.3s;
    }
    
    .tooltip .tooltiptext::after {
      content: "";
      position: absolute;
      top: 100%;
      left: 50%;
      margin-left: -5px;
      border-width: 5px;
      border-style: solid;
      border-color: #555 transparent transparent transparent;
    }
    
    .tooltip:hover .tooltiptext {
      visibility: visible;
      opacity: 1;
    }
    
</style>
  
@endsection