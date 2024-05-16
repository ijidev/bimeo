@extends('user.themes.bimeo.layouts.base')

@section('content')
    <!--       header ends-->
    <div class="my-browser-flex my-browser-flex-column"
        style="margin-top: 104px; ">
        <div class="my-browser-flex-column team-item-box-margin profile-balance-title-content" style="margin-bottom:30px;">

            @foreach ($myTeam as $team)
                <div class="my-browser-flex-item-box-bg  my-browser-flex-column" style="margin: 20px 0 40px 0 ;">
                    <div class="my-browser-flex my-browser-flex-row team-item-value-box-margin team-item-value-color">
                        {{-- <div class="my-brower-text-left team-item-title-margin" style="">
                            <img style="height: 40px;" src="{{ asset('bimoeassets/images/team_p.png') }}">
                        </div> --}}
                        <div style="line-height: 40px; margin-left: 10px;"
                            class="my-brower-text-right team-item-title-margin">
                            {{ $team->name }}</div>
                    </div>
                    <div style="width: 100%;height: 1px;" class="split-line-team">
                    </div>
                    <div
                        class="my-browser-flex my-browser-flex-row team-item-value-box-margin team-item-value-color sky-dark-space-between">
                        <div class="my-browser-flex-column my-brower-text-left team-item-title-margin" style="">
                            <div class="team-item-second-color">{{ $team->name }}'s commission</div>
                            <div style="">${{ $team->balance }}</div>
                        </div>
                        {{-- <div class="my-browser-flex-column my-brower-text-right team-item-title-margin" style="">
                            <div class="team-item-second-color">25% Today's subordinate rebate</div>
                            <div style="">0.00</div>
                        </div> --}}
                    </div>
                    <div
                        class="my-browser-flex my-browser-flex-row team-item-value-box-margin team-item-value-color sky-dark-space-between">
                        <div class="my-browser-flex-column my-brower-text-left " style="margin-bottom: 10px;">
                            <div class="team-item-second-color">My Commission</div>
                            <div style="">${{ $team->balance / 100 * $ref }}</div>
                        </div>
                        <div class="my-browser-flex-column my-brower-text-right " style="margin-bottom: 10px;">
                            <div class="team-item-second-color">Referal Percentage</div>
                            <div style="">%{{ $ref }}</div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <script src="/red/jquery-3.3.1.min.js"></script>
    <script type="application/javascript">$(function() {

})
</script>
    </body>

    </html>
