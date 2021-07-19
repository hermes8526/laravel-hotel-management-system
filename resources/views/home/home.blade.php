@extends('layouts.app')

@section('content')
<div class="slider">
    <div class="slider__slides">
        <div class="slide s--active">
            <div class="slide__inner">
            </div>
        </div>
        <div class="slide">
            <div class="slide__inner">
            </div>
        </div>
        <div class="slide">
            <div class="slide__inner">
            </div>
        </div>
        <div class="slide">
            <div class="slide__inner">
            </div>
        </div>
        <div class="slide s--prev">
            <div class="slide__inner">
            </div>
        </div>
    </div>
    <div class="slider__control">
        <div class="slider__control-line"></div>
        <div class="slider__control-line"></div>
    </div>
    <div class="slider__control slider__control--right m--right">
        <div class="slider__control-line"></div>
        <div class="slider__control-line"></div>
    </div>
    <div class="booking-from">
        <h4>Find the best vaction place to stay</h4>
        @include('layouts.searchbar')
    </div>
</div>
<section class="browse">
    <div class="container">
        <div class="row">
            <div class="col-md-6"><img src="{{ asset('images/sec2-img.jpg') }}" alt=""></div>
            <div class="col-md-6">
                <div class="sec-con">
                    <h3>Browse over 1.2 million + selections</h3>
                    <p>Filter, sort and compare hotel listing to help you for your next trip.
                        Giving the standard that guest can have in easier search for their booking experiences</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="how-does">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="sec-con">
                    <h3>How does it work?</h3>
                    <p>Follow our steps to get our services.</p>
                    <ul>
                        <li><a href="#">
                                <h4>Fill in hte information and submit</h4>
                                <p>choose a suitable place to stay for your trip.</p>
                            </a></li>
                        <li><a href="#">
                                <h4>Booking your Choice.</h4>
                                <p>The system will list down a few selection to your linking base on the information.
                                </p>
                            </a></li>
                        <li><a href="#">
                                <h4>Transaction</h4>
                                <p>Pay the transaction then complete the booking.</p>
                            </a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6"><img src="{{ asset('images/sec3-img.jpg') }}" alt=""></div>
        </div>
    </div>
</section>
<div class="why-chos-us">
    <div class="container">
        <h2>Why choose Us?</h2>
        <div class="row">
            <div class="col-md-3">
                <div class="why-chos-us-box">
                    <img src="{{ asset('images/icon-1.png') }}">
                    <h3><span>135,000</span> <br>hotels Worldwide</h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="why-chos-us-box">
                    <img src="{{ asset('images/icon-2.png') }}">
                    <h3>over <span>2 Milion</span> <br>Guest reviews</h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="why-chos-us-box">
                    <img src="{{ asset('images/icon-3.png') }}">
                    <h3>Trusted by over <br><span>3.15 milion</span> customers</h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="why-chos-us-box">
                    <img src="{{ asset('images/icon-4.png') }}">
                    <h3><span>1.2 milion+</span> <br>hotel reviews each Years</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="top-poplur">
    <div class="container">
        <h2>Top Poplur</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="top-poplur-box">
                    <img src="{{ asset('images/bedroom-5664221_1920.jpg') }}">
                    <h3><a href="#">Kingwood Boutique Hotel</a></h3>
                    <div class="dis">Miri</div>
                    <ul class="uli-h">
                        <li><img src="{{ asset('images/star.png') }}">4.4/5 </li>
                        <li>From</li>
                        <li><span>RM193</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="top-poplur-box">
                    <img src="{{ asset('images/hotel-1749602_1920.jpg') }}">
                    <h3><a href="#">Kingwood Boutique Hotel</a></h3>
                    <div class="dis">Miri</div>
                    <ul class="uli-h">
                        <li><img src="{{ asset('images/star.png') }}">4.4/5 </li>
                        <li>From</li>
                        <li><span>RM193</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="top-poplur-box">
                    <img src="{{ asset('images/woman-4373078_1920.jpg') }}">
                    <h3><a href="#">Kingwood Boutique Hotel</a></h3>
                    <div class="dis">Miri</div>
                    <ul class="uli-h">
                        <li><img src="{{ asset('images/star.png') }}">4.4/5 </li>
                        <li>From</li>
                        <li><span>RM193</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="top-poplur-box">
                    <img src="{{ asset('images/swimming-828795_1920.jpg') }}">
                    <h3><a href="#">Sunway Hotel Georgetown</a></h3>
                    <div class="dis">Pulau Pinang</div>
                    <ul class="uli-h">
                        <li><img src="{{ asset('images/star.png') }}">4.4/5 </li>
                        <li>From</li>
                        <li><span>RM247</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="top-poplur-box">
                    <img src="{{ asset('images/restaurant-1837150_1920.jpg') }}">
                    <h3><a href="#">Abell Hotel</a></h3>
                    <div class="dis">Miri</div>
                    <ul class="uli-h">
                        <li><img src="{{ asset('images/star.png') }}">4.4/5 </li>
                        <li>From</li>
                        <li><span>RM193</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="top-poplur-box">
                    <img src="{{ asset('images/indoors-4234071_1920.jpg') }}">
                    <h3><a href="#">Kingwood Boutique Hotel</a></h3>
                    <div class="dis">Miri</div>
                    <ul class="uli-h">
                        <li><img src="{{ asset('images/star.png') }}">4.4/5 </li>
                        <li>From</li>
                        <li><span>RM157</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@once
@push('scripts')
    <script src="{{asset('js/set-check-date.js')}}"></script>
    <script src="{{asset('js/slider.js')}}"></script>
@endpush
@endonce

@endsection