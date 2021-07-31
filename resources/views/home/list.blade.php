@extends('layouts.app')

@section('content')
<div class="hadder-row">
    <img src="{{ asset('images/header_2.jpg') }}">
    <div class="booking-from">
        <h4>Find the best vaction place to stay</h4>
        @include('partials.searchbar')
    </div>
</div>
<div class="listing-page-saction">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="listing-pageright-bx">
                    <div class="filtr-title">Filter by</div>
                    <div class="filtr-title-box">
                        <div class="row">
                            <div class="col-sm-12 htl-rating">
                                <h3 class="htl-rating">Hotel Star Rating</h3>
                                <div id="slider-range"></div>
                            </div>
                        </div>
                        <div class="row slider-labels">
                            <div class="col-xs-6 caption">
                               <b><span id="slider-range-value1"></span></b>
                            </div>
                            <div class="col-xs-6 text-right caption">
                                <b><span id="slider-range-value2"></span></b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <form>
                                    <input type="hidden" name="min-value" value="">
                                    <input type="hidden" name="max-value" value="">
                                </form>
                            </div>
                        </div>
                        <div class="flt-box-tow">
                            <div class="filtr-title">Filter</div>
                            <ul>
                                <li><a href="#">Promo</a></li>
                                <li><a href="#">W.Breakfast</a></li>
                                <li><a href="#">Extra Bed</a></li>
                            </ul>
                        </div>
                        <div class="htl-star-rating">
                            <div class="filtr-title">Hotel Star Rating</div>
                            <div class="range">
                                <input type="range" min="1" max="5" steps="1" value="1">
                            </div>
                            <ul class="range-labels">
                                <li class="active selected">1</li>
                                <li>2</li>
                                <li>3</li>
                                <li>4</li>
                                <li>5</li>
                            </ul>


                            <a href="#" class="filter-btn">Filter</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="listing-pageright-bx">
                    <div class="result-bx">Result:20 hotel(s Found)</div>
                    <div class="sort-pric-bx">
                        <ul>
                            <li>Sort by</li>
                            <li><select id="room-selection" name="room_preference" required="">
                                    <option value="">Price</option>
                                    <option value="">$10,000 - $15,000</option>
                                    <option value="">$20,000 - $25,000</option>
                                    <option value="">$30,000 - $35,000</option>
                                </select></li>
                        </ul>
                    </div>

                    <div class="listing-list-box">
                        <div class="listing-list-img">
                            <img src="{{ asset('images/Asset%2014-100.jpg') }}">
                        </div>
                        <div class="listing-list-cont">
                            <div class="htol-title">Citadines Upland Kuching</div>
                            <div class="htol-dis"><img src="{{ asset('images/locaction.png') }}">55, Q5A Kenyalang Park, 93300 Kuching,
                                Sarawak
                            </div>
                            <div class="listing-list-rating">
                                <ul>
                                    <li><img src="{{ asset('images/star.png') }}"></li>
                                    <li><img src="{{ asset('images/star.png') }}"></li>
                                    <li><img src="{{ asset('images/star.png') }}"></li>
                                    <li>3</li>
                                </ul>
                            </div>
                            <div class="box-all-right-tow">
                                <div class="offer-pric-box-left">Promo Special 20% off</div>
                                <div class="offer-pric-box-right">RM 162 <br><span>per night</span></div>
                                <div class="btn-rese"><a href="{{ route('home.single') }}">Reserve<i class="fa fa-angle-right"
                                            aria-hidden="true"></i>
                                    </a></div>
                            </div>
                        </div>
                    </div>


                    <div class="listing-list-box">
                        <div class="listing-list-img">
                            <img src="{{ asset('images/Asset%2016-100.jpg') }}">
                        </div>
                        <div class="listing-list-cont">
                            <div class="htol-title">Medan Hotel</div>
                            <div class="htol-dis"><img src="{{ asset('images/locaction.png') }}">55, Q5A Kenyalang Park, 93300 Kuching,
                                Sarawak
                            </div>
                            <div class="listing-list-rating">
                                <ul>
                                    <li><img src="{{ asset('images/star.png') }}"></li>
                                    <li><img src="{{ asset('images/star.png') }}"></li>
                                    <li><img src="{{ asset('images/star.png') }}"></li>
                                    <li>4</li>
                                </ul>
                            </div>
                            <div class="box-all-right-tow">
                                <div class="offer-pric-box-left">Promo Special 20% off</div>
                                <div class="offer-pric-box-right">RM 162 <br><span>per night</span></div>
                                <div class="btn-rese"><a href="{{ route('home.single') }}">Reserve <i class="fa fa-angle-right"
                                            aria-hidden="true"></i>
                                    </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="listing-list-box">
                        <div class="listing-list-img">
                            <img src="{{ asset('images/Asset%2015-100.jpg') }}">
                        </div>
                        <div class="listing-list-cont">
                            <div class="htol-title">WiWO Hotel</div>
                            <div class="htol-dis"><img src="{{ asset('images/locaction.png') }}">55, Q5A Kenyalang Park, 93300 Kuching,
                                Sarawak
                            </div>
                            <div class="listing-list-rating">
                                <ul>
                                    <li><img src="{{ asset('images/star.png') }}"></li>
                                    <li><img src="{{ asset('images/star.png') }}"></li>
                                    <li><img src="{{ asset('images/star.png') }}"></li>
                                    <li>5</li>
                                </ul>
                            </div>
                            <div class="box-all-right-tow">
                                <div class="offer-pric-box-left">Promo Special 20% off</div>
                                <div class="offer-pric-box-right">RM 162 <br><span>per night</span></div>
                                <div class="btn-rese"><a href="{{ route('home.single') }}">Reserve <i class="fa fa-angle-right"
                                            aria-hidden="true"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@once
@push('scripts')
<script src="{{asset('js/filter-bar.js')}}"></script>
@endpush
@endonce

@endsection