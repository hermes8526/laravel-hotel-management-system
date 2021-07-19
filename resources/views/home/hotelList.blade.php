@extends('layouts.app')

@section('content')
<div class="hadder-row">
    <img src="{{ asset('images/header_2.jpg') }}">
    <div class="booking-from">
        <h4>Find the best vaction place to stay</h4>
        @include('layouts.searchbar')
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
                                <div id="sliderRange"></div>
                            </div>
                        </div>
                        <div class="row slider-labels">
                            <div class="col-xs-6 caption">
                                <strong><span id="sliderRangeValue1"></span></strong>
                            </div>
                            <div class="col-xs-6 text-right caption">
                                <strong><span id="sliderRangeValue2"></span></strong>
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
                            <img src="{{ asset('images/str-rating.png') }}">
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
                            <li>
                                <select id="room-selection" name="room_preference" required="">
                                    <option value="">Price</option>
                                    <option value="">Popular</option>
                                </select>
                            </li>
                        </ul>
                    </div>
                    @foreach ($hotels as $hotel)
                    <div class="listing-list-box">
                        <div class="listing-list-img">
                            <?php if ($hotel->image_1 != '') {?>
                            <img src="{{ asset('uploads/images/') }}/{{ $hotel->image_1 }}" alt="Hotel Image">
                            <?php } else {?>
                            <img src="{{ asset('images/default_photo.jpg') }}" alt="Hotel Image">
                            <?php }?>
                        </div>
                        <div class="listing-list-cont">
                            <div class="htol-title">{{ $hotel->name }}</div>
                            <div class="htol-dis">
                                <img src="{{ asset('images/locaction.png') }}">{{ $hotel->street_address }}
                            </div>
                            <div class="listing-list-rating">
                                <ul>
                                    <li><img src="{{ asset('images/star.png') }}"></li>
                                    <li><img src="{{ asset('images/star.png') }}"></li>
                                    <li><img src="{{ asset('images/star.png') }}"></li>
                                    <li>{{ $hotel->rating }}</li>
                                </ul>
                            </div>
                            <div class="box-all-right-tow">
                                <div class="offer-pric-box-left">Promo Special 20% off</div>
                                <div class="offer-pric-box-right">RM 162 <br><span>per night</span></div>
                                <div class="btn-rese"><a href="#">Reserve<i class="fa fa-angle-right"
                                            aria-hidden="true"></i>
                                    </a></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@once
@push('scripts')
<script src="{{asset('js/set-check-date.js')}}"></script>
<script src="{{asset('js/noui-handle.js')}}"></script>
@endpush
@endonce

@endsection