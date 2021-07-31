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
                    <div class="row">
                        <p>asdfasdfasd</p>
                    </div>
                    <ul class="nav nav-tabs" style="background-color: #F4F6FA;height: 40px;">
                        <li class="tab @if($type == 'hotel-active') active @endif">
                            <a href="#hotel-active" data-toggle="tab"> ACTIVE </a>
                        </li>
                        <li class="tab @if($type == 'hotel-approval') active @endif">
                            <a href="#hotel-approval" data-toggle="tab"> APPROVAL </a>
                        </li>
                        <li class="tab @if($type == 'hotel-approved') active @endif">
                            <a href="#hotel-approved" data-toggle="tab"> APPROVED </a>
                        </li>
                        <li class="tab @if($type == 'hotel-inactive') active @endif">
                            <a href="#hotel-inactive" data-toggle="tab">INACTIVE </a>
                        </li>
                    </ul>
                    <div class="tab-content no-padding">
                        <div class="tab-pane @if($type == 'hotel-active') active @endif" id="hotel-active">
                            <div class="action-toolbar">
                                <a class="btn btncolor btn-sm" style="position: absolute;top: -10vh;left: -8vw;"
                                    onclick="clearLocalStorage()" href="#">ADD</a>
                            </div>
                            <div class="table-container">
                                <table class="table table-striped table-hover" id="datatable-hotel-active"
                                    data-url="{{route('getHotels') }}">
                                    <thead>
                                        <tr role="row" class="heading">
                                            <th class="text-center"> #</th>
                                            <th class="text-center"> CODE</th>
                                            <th class="text-center"> HOTEL</th> 
                                            <th class="text-center"> CONTACT</th>
                                            <th class="text-center"> EMAIL</th>
                                            <th class="text-center"> CITY</th>
                                            <th class="text-center"> STATUS</th> 
                                            <th class="text-center"> Action</th>
                                        </tr>
                                        <tr role="row" class="filter">
                                            <td></td>
                                            <td>
                                                <input type="text" class="form-control form-filter filter-search input-sm" name="container_no">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control form-filter filter-search input-sm" name="vessel">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control form-filter filter-search input-sm" name="voyage">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control form-filter filter-search input-sm" name="eta">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control form-filter filter-search input-sm" name="eta">
                                            </td>
                                            <td>
                                                <select name="type" class="form-filter select2me searchctrl">
                                                    <option value=""></option>
                                                    <option value="active">ACTIVE</option>
                                                    <option value="inactive">INACTIVE</option>
                                                </select>
                                            </td>
                                            <td class="text-center">
                                            </td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane @if($type == 'hotel-approval') active @endif" id="hotel-approval">
                            <div class="table-container">
                                <table class="table table-striped table-hover" id="datatable-hotel-approval"
                                    data-url="{{route('getHotels') }}">
                                    <thead>
                                        <tr role="row" class="heading">
                                            <th class="text-center"> #</th>
                                            <th class="text-center"> CODE</th>
                                            <th class="text-center"> HOTEL</th> 
                                            <th class="text-center"> CONTACT</th>
                                            <th class="text-center"> EMAIL</th>
                                            <th class="text-center"> CITY</th>
                                            <th class="text-center"> STATUS</th> 
                                            <th class="text-center"> Action</th>
                                        </tr>
                                        <tr role="row" class="filter">
                                            <td></td>
                                            <td>
                                                <input type="text" class="form-control form-filter filter-search input-sm" name="container_no">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control form-filter filter-search input-sm" name="vessel">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control form-filter filter-search input-sm" name="voyage">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control form-filter filter-search input-sm" name="eta">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control form-filter filter-search input-sm" name="eta">
                                            </td>
                                            <td>
                                                <select name="type" class="form-filter select2me searchctrl">
                                                    <option value=""></option>
                                                    <option value="active">ACTIVE</option>
                                                    <option value="inactive">INACTIVE</option>
                                                </select>
                                            </td>
                                            <td class="text-center">
                                            </td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane @if($type == 'hotel-approved') active @endif" id="hotel-approved">
                            <div class="table-container">
                                <table class="table table-striped table-hover" id="datatable-hotel-approved"
                                    data-url="{{route('getHotels') }}">
                                    <thead>
                                        <tr role="row" class="heading">
                                            <th class="text-center"> #</th>
                                            <th class="text-center"> CODE</th>
                                            <th class="text-center"> HOTEL</th> 
                                            <th class="text-center"> CONTACT</th>
                                            <th class="text-center"> EMAIL</th>
                                            <th class="text-center"> CITY</th>
                                            <th class="text-center"> STATUS</th> 
                                            <th class="text-center"> Action</th>
                                        </tr>
                                        <tr role="row" class="filter">
                                            <td></td>
                                            <td>
                                                <input type="text" class="form-control form-filter filter-search input-sm" name="container_no">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control form-filter filter-search input-sm" name="vessel">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control form-filter filter-search input-sm" name="voyage">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control form-filter filter-search input-sm" name="eta">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control form-filter filter-search input-sm" name="eta">
                                            </td>
                                            <td>
                                                <select name="type" class="form-filter select2me searchctrl">
                                                    <option value=""></option>
                                                    <option value="active">ACTIVE</option>
                                                    <option value="inactive">INACTIVE</option>
                                                </select>
                                            </td>
                                            <td class="text-center">
                                            </td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane @if($type == 'hotel-inactive') active @endif" id="hotel-inactive">
                            <div class="table-container">
                                <table class="table table-striped table-hover" id="datatable-hotel-inactive"
                                    data-url="{{route('getHotels') }}">
                                    <thead>
                                        <tr role="row" class="heading">
                                            <th class="text-center"> #</th>
                                            <th class="text-center"> CODE</th>
                                            <th class="text-center"> HOTEL</th> 
                                            <th class="text-center"> CONTACT</th>
                                            <th class="text-center"> EMAIL</th>
                                            <th class="text-center"> CITY</th>
                                            <th class="text-center"> STATUS</th> 
                                            <th class="text-center"> Action</th>
                                        </tr>
                                        <tr role="row" class="filter">
                                            <td></td>
                                            <td>
                                                <input type="text" class="form-control form-filter filter-search input-sm" name="container_no">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control form-filter filter-search input-sm" name="vessel">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control form-filter filter-search input-sm" name="voyage">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control form-filter filter-search input-sm" name="eta">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control form-filter filter-search input-sm" name="eta">
                                            </td>
                                            <td>
                                                <select name="type" class="form-filter select2me searchctrl">
                                                    <option value=""></option>
                                                    <option value="active">ACTIVE</option>
                                                    <option value="inactive">INACTIVE</option>
                                                </select>
                                            </td>
                                            <td class="text-center">
                                            </td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
