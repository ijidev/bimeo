@extends('user.themes.bimeo.layouts.base')

@section('title')

@endsection

@section('content')
    <div class="row justify-content-center" style="color:white; text-align: center;;">
        <div class="col-md-8">
            <div class="text-center">
                <img src="{{ asset($product->img) }}" class="rounded-circl rounded-top rounded-bottom" height="80" width="80" alt="product img"> 
                
                <h4>
                    {{ $product->name }}
                </h4>

                <div class=" my-browser-flex my-browser-flex-nowrap my-browser-flex-row my-browser-flex-space-between   profile-my-balance-container-bg profile-group-bg">
                    <div class="card-body profile-balance-title-content" style="width: 50%">
                        <div class=" my-browser-flex my-browser-flex-nowrap  text-center">
                            <div class="col"  style="text-align: center">
                            
                                @php
                                    $price ;
                                    $combo ;
                                    // $combo_text ;
                                @endphp
                                @if ($userProduct->count() > 0)
                                    @php
                                        $price = $userProduct->sum('price'); 
                                        $combo = 6;
                                    @endphp
                                @else
                                    @php
                                        $price =  $product->price; 
                                        $combo = 1;
                                    @endphp
                                @endif
                                
                                
                                <div class="mb-0 font-weight-normal my-browser-flex-item-value-color"> {{ $price }} USD </div>
                                <p class="profile-my-balance-title" style="margin-top: 6px">Total Amount</p>
                            </div>
                        </div>
                    </div>
                    <div class="content-v-line" style="width: 1px;height: 80px;margin-top: 10px;"></div>
                    <div class="card-body profile-balance-title-content" style="width: 50%">
                        <div class=" my-browser-flex my-browser-flex-nowrap  text-center">
                            <div class="col"  style="text-align: center">
                                <div class="mb-0 font-weight-normal my-browser-flex-item-value-color">{{ $combo * ($price / 100 * Auth::user()->tier->percent) }} USD </div>
                                <p class="profile-my-balance-title" style="margin-top: 8px">Profit</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- fetching product crated at time and ratig number --}}
            <div class="text-center mb-4 mt-4">
                <div class="mb-4 mt-4">
                    <strong>Creation Time</strong> <br>
                    {{ $product->created_at }}
                </div>
                <div class="mb-4 mt-4">
                    <strong>Rating No.</strong> <br>
                    {{  uniqId(5) }}

                    {{-- @php
                        echo uniqId(5)
                    @endphp --}}
                    
                </div>
            </div>



            <div class="card">
                <div class="card-body">
                    <div class="container">
                        <span id="rateMe1"></span>
                    </div>
                      

                    <form action="{{ route('submit.review',$product->id) }}">

                        <Input name="r_id" value="{{ $r_id }}" hidden>
                        <Input name="pair_id" value="{{ $userProduct->first()->pair_id }}" hidden>
                     
                        <div class="text-center">
                            <strong>Rate Us Now</strong> <br>

                            <style>
                                .rating {
                                    display: inline-block;
                                }
                        
                                .rating input {
                                    display: none;
                                }
                        
                                .rating label {
                                    font-size: 30px;
                                    cursor: pointer;
                                    float: right; /* Align stars to the right */
                                }
                        
                                .rating label:before {
                                    content: '\2605';
                                    margin-right: 5px;
                                }
                        
                                .rating input:checked ~ label:before {
                                    content: '\2605'; /* Filled star character */
                                    color: #FFD700; /* Yellow color or your preferred color */
                                }
                            </style>
                        
                            <div class="rating">
                                <input type="radio" id="star1" value="1">
                                <label for="star1"></label>

                                <input type="radio" id="star2" value="2">
                                <label for="star2"></label>

                                <input type="radio" id="star3" value="3">
                                <label for="star3"></label>

                                <input type="radio" id="star4" value="4">
                                <label for="star4"></label>
                                
                                <input type="radio" id="star5" value="5">
                                <label for="star5"></label>
                            </div>
                        
                            <script>
                                // JavaScript can be used to capture the selected rating and process it as needed
                                const ratingInputs = document.querySelectorAll('.rating input');
                                let selectedRating = 0;
                        
                                ratingInputs.forEach(input => {
                                    input.addEventListener('change', () => {
                                        selectedRating = input.value;
                                        // console.log('Selected Rating: ' + selectedRating);
                                        // You can perform further actions with the selected rating here
                                    });
                                });
                            </script>
                        </div>

                       {{--  <div class="form-group mb-3 text-white">
                            <h5 class="text-light mt-4">Describe your Review (optional)</h5>
                            
                            <input type="radio" name="rating" value="Excellent! I personally used it too, very Applicable">
                            <label for="html">Excellent! I personally used it too, very Applicable</label><br>
                            <input type="radio" name="rating" value="Normal! Not used often but know the Product">
                            <label for="css">Normal! Not used often but know the Product</label><br>
                            <input type="radio" name="rating" value="Opps! Not used or heard it before">
                            <label for="javascript">Opps! Not used or heard it before</label>
                        </div>

                        <div class="form-group mb-4">
                            <label for="comment">Comment</label>
                            <textarea name="comment" id=""  cols="10" class="form-control" placeholder="type here"></textarea>
                        </div>
                        <hr> --}}
                        <div class="text-center">
                            <button class="btn btn-primary" type="submit"
                            style="font-size: 16px;
                            text-transform: uppercase;
                            font-weight: normal;
                            padding: 10px;
                            border-radius: 10px;
                            margin-top: 20px;
                            color: white;
                            background: powderblue;">Submit</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

