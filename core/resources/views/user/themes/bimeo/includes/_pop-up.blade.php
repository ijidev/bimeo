<div id="certModal" class="modal">
    <div class="modal-content">
        <span class="close" id="certCloseBtn">&times;</span>
        <h2>Certificate</h2>
        <img src="{{ asset($set->letter) }}" style="max-width:100%;border:0" alt="certificate">
        <img src="{{ asset($set->cert) }}" style="max-width:100%;border:0" alt="certificate">
    </div>
</div>

{{-- terms model--}}
<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close" id="closeModalBtn">&times;</span>
        <h2>Terms</h2>
        @if ($set != null)
            <p>{!! $set->term !!}</p>
        @endif
    </div>
</div>

{{-- fad model --}}
<div id="faqModal" class="modal">
    <div class="modal-content">
        <span class="close" id="faqCloseBtn">&times;</span>
        <h2>FAQ</h2>
        @foreach ($faqs as $faq)
            <div class="faq-card">
                <div class="faq-question">
                    <h5>{{ $faq->question }}</h5>
                </div>
                <div class="faq-answer">
                    {!! $faq->answer !!}
                </div>
            </div>
        @endforeach
    </div>
</div>

<div id="aboutModal" class="modal">
    <div class="modal-content">
        <span class="close" id="aboutCloseBtn">&times;</span>
        <h2>About Us</h2>
        <hr>
        @if ($set != null)
            <p>{!! $set->about !!}</p>
        @endif

    </div>
</div>

<div id="eventModal" class="modal">
    <div class="modal-content text-left">
        <span class="close" id="eventCloseBtn">&times;</span>
        <h2>Event</h2>
        <hr>
        <uni-rich-text data-v-60bc8dea="" style="color: rgb(255, 255, 255);"><div style="position: relative;"><p data-v-a75f7a08=""><img data-v-a75f7a08="" alt="" src="{{asset('frontassets/images/membership.jpg')}}" style="max-width:100%;border:0"></p>

            <p data-v-a75f7a08=""><span data-v-a75f7a08="" style="font-family:Microsoft YaHei;"><span data-v-a75f7a08="" style="font-size:9px;"><strong data-v-a75f7a08="">Upgrade VIP join as SalesForce VIP members</strong></span></span></p>
            
            <p data-v-a75f7a08=""><span data-v-a75f7a08="" style="font-family:Microsoft YaHei;"><span data-v-a75f7a08="" style="font-size:9px;"><strong data-v-a75f7a08="">• Normal membership Price is Eur(£)99 The daily limit is 35 Products the profit rate for each Product is 0.5%<br data-v-a75f7a08="">
            • Silver membership Price is Eur(£)399 The daily limit is 40 Products the profit rate for each Products is 0.75%<br data-v-a75f7a08="">
            • Gold membership Price is Eur(£)999 The daily limit is 45 Products the profit rate for each Products is 1%<br data-v-a75f7a08="">
            • Platinum membership price is Eur(£)4999 The daily limit is 50 Products the profit rate for each Products is 1.25%<br data-v-a75f7a08="">
            • Diamond membership price is Eur(£)9999 The daily limit is 55 Products the profit rate for each Products is 1.5%</strong></span></span></p>
            
            <p data-v-a75f7a08=""><span data-v-a75f7a08="" style="font-family:Microsoft YaHei;"><span data-v-a75f7a08="" style="font-size:9px;"><strong data-v-a75f7a08="">Benefits:<br data-v-a75f7a08="">
            • Profit rates for different VIP levels<br data-v-a75f7a08="">
            • Can be reset 3 times daily<br data-v-a75f7a08="">
            • All capital and profit amounts can be withdrawn</strong></span></span></p>
            
            <p data-v-a75f7a08=""><br data-v-a75f7a08="">
            <span data-v-a75f7a08="" style="font-family:Microsoft YaHei;"><span data-v-a75f7a08="" style="font-size:9px;"><strong data-v-a75f7a08="">Terms &amp; Conditions<br data-v-a75f7a08="">
            • This offer is open to all Salesforce members<br data-v-a75f7a08="">
            • VIP Salesforce membership is NON-transferable.<br data-v-a75f7a08="">
            • Agents recharge the following VIP amount for start-up capital can upgrade to enjoy VIP level benefits and the money can be withdraw-able after completing the Products<br data-v-a75f7a08="">
            • Agent VIP membership &amp; privilege is lifetime<br data-v-a75f7a08="">
            • The agent will start enjoying VIP privileges as each VIP level<br data-v-a75f7a08="">
            • The profit rate will increase with your VIP privilege level. (As shown above)<br data-v-a75f7a08="">
            Note: If any member violates conditions, Salesforce always reserves the right to terminate the member's VIP status without any prior notice.<br data-v-a75f7a08="">
            General terms and conditions apply.<br data-v-a75f7a08="">
            <br data-v-a75f7a08="">
            <br data-v-a75f7a08="">
            <img data-v-a75f7a08="" alt="" src="{{ asset('frontassets/images/deposit.jpg') }}" style="max-width:100%;border:0"></strong></span></span></p>
            
            <p data-v-a75f7a08=""><br data-v-a75f7a08="">
            <strong data-v-a75f7a08=""><span data-v-a75f7a08="" style="font-family:Microsoft YaHei;"><span data-v-a75f7a08="" style="font-size:9px;">As a user of the platform, users may invite others to join your team by using the User ID after becoming a Diamond Membership. In return, the referrer will receive a percentage of referral fees, which will be credited directly to users via the platform account or team report.</span></span></strong></p>
            
            <p data-v-a75f7a08=""><br data-v-a75f7a08="">
            <span data-v-a75f7a08="" style="font-family:Microsoft YaHei;"><span data-v-a75f7a08="" style="font-size:9px;"><strong data-v-a75f7a08="">Notice!<br data-v-a75f7a08="">
            All users and their referrals will receive a percentage of referral incentives and bonuses</strong></span></span></p>
            
            <p data-v-a75f7a08=""><br data-v-a75f7a08="">
            <span data-v-a75f7a08="" style="font-family:Microsoft YaHei;"><span data-v-a75f7a08="" style="font-size:9px;"><strong data-v-a75f7a08="">User and Business Non-Disclosure Agreement<br data-v-a75f7a08="">
            The product to be completed on this platform is real-time data done by real users. Therefore, the users must ensure the Product's confidentiality and platform.</strong></span></span></p>
            <uni-resize-sensor><div><div></div></div><div><div></div></div></uni-resize-sensor></div></uni-rich-text>
    </div>
</div>

<div id="popup" class="modal">
    <div class="modal-content">
        <span class="close" id="popCloseBtn">&times;</span>
        <img data-v-a75f7a08="" alt="" src="{{ asset('frontassets/images/deposit.jpg') }}" style="max-width:100%;border:0"></strong>
    </div>
</div>