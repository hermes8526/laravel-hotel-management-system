@extends('layouts.admin')
@section('content')    
    
<div class="page-content-body-wrapper no-padding">
    <div class="page-content-body no-padding">
        <div class="portlet light">
            <div class="portlet-body no-padding">
                <div class="tabbable-custom tabbable-parallel">
                    @if(count($errors) > 0)
                    <div class="col-md-12" style="padding-left: 50px;margin-top:20px;">
                        <div class="row">
                            <div class="col-md-11">
                                <div class="row">
                                    <div class="alert alert-danger">
                                        <button class="close" data-close="alert"></button>
                                        You have some form errors. Please check below.
                                        <span data-notify="message" style="margin-top:5px;">
                                            @foreach($errors->all() as $error)
                                            <li><strong> {{$error}} </strong></li>
                                            @endforeach
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    <div style="height: 50px; background-color: #F4F6FA">
                        <div class="row" style="padding: 15px">
                            <div class="col-md-2">CODE: {{ $hotel->code }}</div>
                            <div class="col-md-2">NAME: {{ $hotel->name }}</div>
                            <div class="col-md-3">LAST UPDATE: 01/08/2021</div>
                            <div class="col-md-1 col-md-offset-3">
                                <a class="btn btn-danger btn-sm" onclick="clearLocalStorage()" href="#">DISCORD</a>
                            </div>
                            <div class="col-md-1">
                                <a class="btn btn-success btn-sm" onclick="clearLocalStorage()" href="#">SAVE</a>
                            </div>
                        </div>
                    </div>
                    <ul class="nav nav-tabs" style="background-color: #F4F6FA;height: 40px;">
                        <li class="tab @if($type == 'hotel-details') active @endif">
                            <a href="#hotel_details" data-toggle="tab"> DETAILS </a>
                        </li>
                        <li class="tab @if($type == 'hotel-others') active @endif">
                            <a href="#hotel_others" data-toggle="tab"> OTHERS </a>
                        </li>
                        <li class="tab @if($type == 'hotel-facilities') active @endif">
                            <a href="#hotel_facilities" data-toggle="tab"> FACILIITES </a>
                        </li>
                        <li class="tab @if($type == 'hotel-cacellation') active @endif">
                            <a href="#hotel_cacellation" data-toggle="tab">CANCELLATION </a>
                        </li>
                        <li class="tab @if($type == 'hotel-location') active @endif">
                            <a href="#hotel_location" data-toggle="tab">LOCATION </a>
                        </li>
                        <li class="tab @if($type == 'hotel-picture') active @endif">
                            <a href="#hotel_picture" data-toggle="tab">PICTURE </a>
                        </li>
                        <li class="tab @if($type == 'hotel-payment') active @endif">
                            <a href="#hotel_payment" data-toggle="tab">PAYMENT </a>
                        </li>
                        <li class="tab @if($type == 'hotel-rate') active @endif">
                            <a href="#hotel_rate" data-toggle="tab">ROOM RATE </a>
                        </li>
                    </ul>
                    <div class="tab-content no-padding">
                        <div class="tab-pane @if($type == 'hotel-details') active @endif" id="hotel_details">
                            <div class="portlet light  bordered box-shadow" style="height: 100%;">
                                <div class="portlet-body no-padding">
                                    <div class="tabbable-custom tabbable-parallel">
                                        <div class="tab-content no-padding" style="border-top: 2px solid #f5f5f5;background-color: #F4F6FA;">
                                            <div class="tab-pane active" id="listing-add">
                                                <form action="{{route('/')}}" method="post" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    <div class="row">
                                                        @if(count($errors) > 0)
                                                            <div class="col-md-12" style="padding-left: 50px;">
                                                                <div class="row">
                                                                    <div class="col-md-11">
                                                                        <div class="row">
                                                                            <div class="alert alert-danger">
                                                                                <button class="close" data-close="alert"></button>
                                                                                You have some form errors. Please check below.
                                                                                <span data-notify="message" style="margin-top:5px;">
                                                                            @foreach($errors->all() as $error)
                                                                                        <li><strong> {{$error}} </strong></li>
                                                                                    @endforeach </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                        <input type="hidden" name="id" value="{{ 1 }}">
                                                        <input type="hidden" name="type" value="{{$hotel->type}}">
                                                        <div class="col-md-12">
                                                            <div class="row" style="margin-top: 30px">
                                                                <div class="col-md-1"></div>
                                                                <div class="col-md-4">
                                                                    <div class="row" style="margin-bottom: 15px">
                                                                        <div class="form-group">
                                                                            <label class="control-label col-sm-3" for="country">COUNTRY</label>
                                                                            <div class="col-sm-9">
                                                                                <select class="form-control" id="country">
                                                                                    @foreach ($countries as $country)
                                                                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row" style="margin-bottom: 15px">
                                                                        <div class="form-group">
                                                                            <label class="control-label col-sm-3" for="city">CITY</label>
                                                                            <div class="col-sm-9">
                                                                                <select class="form-control" id="city">
                                                                                    @foreach ($cities as $city)
                                                                                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row" style="margin-bottom: 15px">
                                                                        <div class="form-group">
                                                                            <label class="control-label col-sm-3" for="status">STATUS</label>
                                                                            <div class="col-sm-9">
                                                                                <select class="form-control" id="status">
                                                                                    <option value="active">ACTIVE</option>
                                                                                    <option value="approval">APPROVAL</option>
                                                                                    <option value="approved">APPROVED</option>
                                                                                    <option value="inactive">INACTIVE</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row" style="margin-bottom: 15px">
                                                                        <div class="form-group">
                                                                            <label class="control-label col-sm-3" for="wholeSaler">WHOLESALER</label>
                                                                            <div class="col-sm-9">
                                                                                <select class="form-control" id="wholeSaler">
                                                                                    @foreach ($wholeSalers as $wholeSaler)
                                                                                        <option value="{{ $wholeSaler->id }}">{{ $wholeSaler->name }}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row" style="margin-bottom: 15px">
                                                                        <div class="form-group">
                                                                            <label class="control-label col-sm-3" for="email">MARKUP</label>
                                                                            <div class="col-sm-9">
                                                                                <select class="form-control" id="markup">
                                                                                    <option>17 %</option>
                                                                                    <option>17 %</option>
                                                                                    <option>17 %</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row" style="margin-bottom: 15px">
                                                                        <div class="form-group">
                                                                            <label class="control-label col-sm-3" for="name">NAME</label>
                                                                            <div class="col-sm-9">
                                                                                <input type="text" class="form-control" id="name" value="{{ $hotel->name }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row" style="margin-bottom: 15px">
                                                                        <div class="form-group">
                                                                            <label class="control-label col-sm-3" for="address">ADDRESS</label>
                                                                            <div class="col-sm-9">
                                                                                <textarea class="form-control" id="address">{{ $hotel->address }}</textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row" style="margin-bottom: 15px">
                                                                        <div class="form-group">
                                                                            <label class="control-label col-sm-3" for="postcode">POSTCODE</label>
                                                                            <div class="col-sm-9">
                                                                                <input type="text" class="form-control" id="postcode" value="{{ $hotel->postcode }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-1"></div>
                                                                <div class="col-md-4">
                                                                    <div class="row" style="margin-bottom: 15px">
                                                                        <div class="form-group">
                                                                            <label class="control-label col-sm-3" for="email">EMAIL</label>
                                                                            <div class="col-sm-9">
                                                                                <input type="email" class="form-control" name="email" value="{{ $hotel->email }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row" style="margin-bottom: 15px">
                                                                        <div class="form-group">
                                                                            <label class="control-label col-sm-3" for="tel_number">TEL NUMBER</label>
                                                                            <div class="col-sm-9">
                                                                                <input type="text" class="form-control" name="tel_number" value="{{ $hotel->tel_number }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row" style="margin-bottom: 15px">
                                                                        <div class="form-group">
                                                                            <label class="control-label col-sm-3" for="fax_number">FAX NUMBER</label>
                                                                            <div class="col-sm-9">
                                                                                <input type="text" class="form-control" name="fax_number" value="{{ $hotel->fax_number }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane @if($type == 'hotel-others') active @endif" id="hotel_others">
                            <div class="portlet light  bordered box-shadow" style="height: 100%;">
                                <div class="portlet-body no-padding">
                                    <div class="tabbable-custom tabbable-parallel">
                                        <div class="tab-content no-padding" style="border-top: 2px solid #f5f5f5;background-color: #F4F6FA;">
                                            <div class="tab-pane active" id="listing-add">
                                                <form action="{{route('/')}}" method="post" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    <div class="row">
                                                        @if(count($errors) > 0)
                                                            <div class="col-md-12" style="padding-left: 50px;">
                                                                <div class="row">
                                                                    <div class="col-md-11">
                                                                        <div class="row">
                                                                            <div class="alert alert-danger">
                                                                                <button class="close" data-close="alert"></button>
                                                                                You have some form errors. Please check below.
                                                                                <span data-notify="message" style="margin-top:5px;">
                                                                            @foreach($errors->all() as $error)
                                                                                        <li><strong> {{$error}} </strong></li>
                                                                                    @endforeach </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                        <input type="hidden" name="id" value="{{ 1 }}">
                                                        <input type="hidden" name="type" value="{{$hotel->type}}">
                                                        <div class="col-md-12">
                                                            <div class="row" style="margin-top: 30px">
                                                                <div class="col-md-1"></div>
                                                                <div class="col-md-4">
                                                                    <div class="row" style="margin-bottom: 15px">
                                                                        <div class="form-group">
                                                                            <label class="control-label col-sm-3" for="hotel_description">HOTEL DESCRIPTION</label>
                                                                            <div class="col-sm-9">
                                                                                <textarea class="form-control" id="hotel_description">{{ $hotel->hotel_description }}</textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row" style="margin-bottom: 15px">
                                                                        <div class="form-group">
                                                                            <label class="control-label col-sm-3" for="location_description">LOCATION DESCRIPTION</label>
                                                                            <div class="col-sm-9">
                                                                                <textarea class="form-control" id="location_description">{{ $hotel->location_description }}</textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row" style="margin-bottom: 15px">
                                                                        <div class="form-group">
                                                                            <label class="control-label col-sm-3" for="room_description">ROOM DESCRIPTION</label>
                                                                            <div class="col-sm-9">
                                                                                <textarea class="form-control" id="room_description">{{ $hotel->room_description }}</textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row" style="margin-bottom: 15px">
                                                                        <div class="form-group">
                                                                            <label class="control-label col-sm-3" for="restaurant_description">RESTAURANT DESCRIPTION</label>
                                                                            <div class="col-sm-9">
                                                                                <textarea class="form-control" id="restaurant_description">{{ $hotel->restaurant_description }}</textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row" style="margin-bottom: 15px">
                                                                        <div class="form-group">
                                                                            <label class="control-label col-sm-3" for="general_description">GENERAL DESCRIPTION</label>
                                                                            <div class="col-sm-9">
                                                                                <textarea class="form-control" id="general_description">{{ $hotel->general_description }}</textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-1"></div>
                                                                <div class="col-md-4">
                                                                    <div class="row" style="margin-bottom: 15px">
                                                                        <div class="form-group">
                                                                            <label class="control-label col-sm-3" for="remark">REMARK</label>
                                                                            <div class="col-sm-9">
                                                                                <textarea class="form-control" id="remark">{{ $hotel->remark }}</textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row" style="margin-bottom: 15px">
                                                                        <div class="form-group">
                                                                            <label class="control-label col-sm-3" for="type_accomodation">TYPE OF ACCOMODATION</label>
                                                                            <div class="col-sm-9">
                                                                                <input type="text" class="form-control" name="type_accomodation" value="{{ $hotel->type_accomodation }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row" style="margin-bottom: 15px">
                                                                        <div class="form-group">
                                                                            <label class="control-label col-sm-3" for="star_rating">STAR RATING</label>
                                                                            <div class="col-sm-9">
                                                                                <select class="form-control" id="star_rating">
                                                                                    <option value="1">1</option>
                                                                                    <option value="2">2</option>
                                                                                    <option value="3">3</option>
                                                                                    <option value="4">4</option>
                                                                                    <option value="5">5</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row" style="margin-bottom: 15px">
                                                                        <div class="form-group">
                                                                            <label class="control-label col-sm-3" for="number_room">NUMBER OF ROOM</label>
                                                                            <div class="col-sm-9">
                                                                                <select class="form-control" id="number_room">
                                                                                    <option value="1">1</option>
                                                                                    <option value="2">2</option>
                                                                                    <option value="3">3</option>
                                                                                    <option value="4">4</option>
                                                                                    <option value="5">5</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row" style="margin-bottom: 15px">
                                                                        <div class="form-group">
                                                                            <label class="control-label col-sm-3" for="check_in">CHECK-IN</label>
                                                                            <div class="col-sm-9">
                                                                                <input type="text" class="form-control" name="check_in" value="{{ $hotel->check_in }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row" style="margin-bottom: 15px">
                                                                        <div class="form-group">
                                                                            <label class="control-label col-sm-3" for="check_out">CHECK-OUT</label>
                                                                            <div class="col-sm-9">
                                                                                <input type="text" class="form-control" name="check_out" value="{{ $hotel->check_out }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane @if($type == 'hotel-facilities') active @endif" id="hotel_facilities">
                            <div class="container" style="margin-top: 20px">
                                <p>HOTEL FACILITIES</p>
                                <form class="col-md-10">
                                    @foreach ($hotelFacilities as $facility)
                                        <div class="form-check col-md-4">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">{{ $facility->name }}
                                            </label>
                                        </div>
                                    @endforeach
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane @if($type == 'hotel-cacellation') active @endif" id="hotel_cacellation">
                            <div class="col-md-6" style="margin-top: 20px">
                                <div class="row" style="margin-bottom: 15px">
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="prior_arrival">DAY(S) PRIOR TO ARRIVAL</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" id="prior_arrival">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 15px">
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="night_charge">NIGHT(S) CHARGE</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" id="night_charge">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 15px">
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="cancellation_description">CANCELLATION DESCRIPTION</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" id="cancellation_description">{{ $hotel->cancellation_description }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="tab-pane @if($type == 'hotel-location') active @endif" id="hotel_location">
                            <div class="col-md-6 col-md-offset-3" style="margin-top: 20px">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.3845088854246!2d110.35388411424424!3d1.5361021613778536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31fba7a06d17aab7%3A0xf1afe9bd504791ed!2sCitadines%20Uplands%20Kuching!5e0!3m2!1sen!2sin!4v1626429658965!5m2!1sen!2sin"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                                </iframe>
                            </div>
                        </div>
                        <div class="tab-pane @if($type == 'hotel-picture') active @endif" id="hotel_picture">
                            This is a picture page
                        </div>
                        <div class="tab-pane @if($type == 'hotel-payment') active @endif" id="hotel_payment">
                            <div class="col-md-6"  style="margin-top: 20px">
                                <div class="panel panel-default">
                                    <div class="panel-heading">PREFERRED PAYMENT METHOD</div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label class="control-label col-sm-4" for="payment_method">PAYMENT METHOD : </label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="payment_method" value="{{ $hotel->payment_method }}">
                                                </div>
                                            </div>
                                        </div>
                                        <label class="control-label col-sm-4" for="payment_method">FOR A/C OF : </label>
                                        <div class="form-check col-md-4">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">SHOW
                                            </label>
                                        </div>
                                        <div class="form-check col-md-4">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">DON'T SHOW
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane @if($type == 'hotel-room-rate') active @endif" id="hotel_rom_rate">
                            This is a room rate page.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
