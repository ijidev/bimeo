@extends('user.themes.bimeo.layouts.base')
@section('content')

<div class="modal" tabindex="-1" id="toCS4recharge" style="display: block; padding-right: 4px;" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content border-top border-bottom" style="width:90%; margin: 0 auto; box-shadow:4px 4px 5px 3px #999;">
            <div class="modal-header border-0 bg-template home-to-cs-text" style="color: black;">
                <h5>Please contact customer service to recharge</h5>
            </div>
            <div class="modal-footer border-0 my-browser-flex my-browser-flex-center my-browser-flex-space-between" style="width: 100%;">
                <button style="margin-left: 50px;margin-top: 30%;" class="btn btn-default btn-sm btn-rounded shadow " onclick="window.location.href='{{route('contact')}}'">Confirm</button>
                <button style="margin-right: 50px; margin-left: 10px;margin-top: 30%;" class="btn btn-default btn-sm btn-rounded shadow" onclick="window.location.href='{{route('home')}}'">Cancel</button>
            </div>
        </div>
    </div>
</div>
@endsection