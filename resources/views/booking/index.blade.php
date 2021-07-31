@extends('layouts.admin')
@section('header_style')
<link href="{{asset('assets/plugins/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css')}}" rel="stylesheet"
    type="text/css" />
<link href="{{asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}" rel="stylesheet"
    type="text/css" />
<link href="{{asset('assets/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css') }}" rel="stylesheet"
    type="text/css" />
<link href="{{asset('assets/plugins/bootstrap-modal/css/bootstrap-modal.css') }}" rel="stylesheet" type="text/css" />
<style>
.hide_column {
    display: none;
}
</style>
@endsection
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
                    <ul class="nav nav-tabs" style="background-color: #F4F6FA;height: 60px;">
                        <li class="tab @if($type == 'bookingNew') active @endif">
                            <a href="#bookingNew" data-toggle="tab"> NEW </a>
                        </li>
                        <li class="tab @if($type == 'bookingConfirmed') active @endif">
                            <a href="#bookingConfirmed" data-toggle="tab"> CONFIRMED </a>
                        </li>
                        <li class="tab @if($type == 'bookingCanceled') active @endif">
                            <a href="#bookingCanceled" data-toggle="tab"> CANCELLED </a>
                        </li>
                        <li class="tab @if($type == 'bookingQuotation') active @endif">
                            <a href="#bookingQuotation" data-toggle="tab">QUOTATION </a>
                        </li>
                    </ul>
                    <div class="tab-content no-padding">
                        <div class="tab-pane @if($type == 'bookingNew') active @endif" id="bookingNew">
                            <div class="action-toolbar">
                                <a class="btn btncolor btn-sm" style="position: absolute;top: -10vh;left: -8vw;"
                                    onclick="clearLocalStorage()" href="#">ADD</a>
                            </div>
                            <div class="table-container">
                                <table class="table table-striped table-hover" id="datatable-bookingNew"
                                    data-url="{{route('getBookings') }}">
                                    <thead>
                                        <tr role="row" class="heading">
                                            <th class="text-center"> #</th>
                                            <th class="text-center"> DATE</th>
                                            <th class="text-center"> BOOKING NO</th> 
                                            <th class="text-center"> HOTEL</th>
                                            <th class="text-center"> ROOMS</th>
                                            <th class="text-center"> CHECK-IN</th>
                                            <th class="text-center"> CHECK-OUT</th> 
                                            <th class="text-center"> AMOUNT</th>
                                            <th class="text-center"> HANDLE BY</th>
                                            <th class="text-center"> Action</th>
                                        </tr>
                                        <tr role="row" class="filter">
                                            <td></td>
                                            <td>
                                                <input type="text" class="form-control form-filter filter-search input-sm" name="bl_no">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control form-filter filter-search input-sm" name="shipper">
                                            </td>
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
                                                <input type="text" class="form-control form-filter filter-search input-sm" name="eta">
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
                        <div class="tab-pane @if($type == 'bookingConfirmed') active @endif" id="bookingConfirmed">
                            <div class="table-container">
                                <table class="table table-striped table-hover" id="datatable-bookingConfirmed"
                                    data-url="{{route('getBookings') }}">
                                    <thead>
                                        <tr role="row" class="heading">
                                            <th class="text-center"> #</th>
                                            <th class="text-center"> DATE</th>
                                            <th class="text-center"> BOOKING NO</th> 
                                            <th class="text-center"> CFM NO</th> 
                                            <th class="text-center"> HOTEL</th>
                                            <th class="text-center"> ROOMS</th>
                                            <th class="text-center"> CHECK-IN</th>
                                            <th class="text-center"> CHECK-OUT</th> 
                                            <th class="text-center"> AMOUNT</th>
                                            <th class="text-center"> HANDLE BY</th>
                                            <th class="text-center"> Action</th>
                                        </tr>
                                        <tr role="row" class="filter">
                                            <td></td>
                                            <td>
                                                <input type="text" class="form-control form-filter filter-search input-sm" name="bl_no">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control form-filter filter-search input-sm" name="shipper">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control form-filter filter-search input-sm" name="shipper">
                                            </td>
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
                                                <input type="text" class="form-control form-filter filter-search input-sm" name="eta">
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
                        <div class="tab-pane @if($type == 'bookingCanceled') active @endif" id="bookingCanceled">
                            <div class="table-container">
                                <table class="table table-striped table-hover" id="datatable-bookingCanceled"
                                    data-url="{{route('getBookings') }}">
                                    <thead>
                                        <tr role="row" class="heading">
                                            <th class="text-center"> #</th>
                                            <th class="text-center"> CANCELED DATE</th>
                                            <th class="text-center"> BOOKING NO</th> 
                                            <th class="text-center"> CFM NO</th> 
                                            <th class="text-center"> HOTEL</th>
                                            <th class="text-center"> ROOMS</th>
                                            <th class="text-center"> CHECK-IN</th>
                                            <th class="text-center"> CHECK-OUT</th> 
                                            <th class="text-center"> AMOUNT</th>
                                            <th class="text-center"> HANDLE BY</th>
                                            <th class="text-center"> Action</th>
                                        </tr>
                                        <tr role="row" class="filter">
                                            <td></td>
                                            <td>
                                                <input type="text" class="form-control form-filter filter-search input-sm" name="bl_no">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control form-filter filter-search input-sm" name="shipper">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control form-filter filter-search input-sm" name="shipper">
                                            </td>
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
                                                <input type="text" class="form-control form-filter filter-search input-sm" name="eta">
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
                        <div class="tab-pane @if($type == 'bookingQuotation') active @endif" id="bookingQuotation">
                            <div class="table-container">
                                <table class="table table-striped table-hover" id="datatable-bookingQuotation"
                                    data-url="{{route('getBookings') }}">
                                    <thead>
                                        <tr role="row" class="heading">
                                            <th class="text-center"> #</th>
                                            <th class="text-center"> DATE</th>
                                            <th class="text-center"> QUOTATION NO</th> 
                                            <th class="text-center"> HOTEL</th>
                                            <th class="text-center"> ROOMS</th>
                                            <th class="text-center"> CHECK-IN</th>
                                            <th class="text-center"> CHECK-OUT</th> 
                                            <th class="text-center"> AMOUNT</th>
                                            <th class="text-center"> HANDLE BY</th>
                                            <th class="text-center"> Action</th>
                                        </tr>
                                        <tr role="row" class="filter">
                                            <td></td>
                                            <td>
                                                <input type="text" class="form-control form-filter filter-search input-sm" name="bl_no">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control form-filter filter-search input-sm" name="shipper">
                                            </td>
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
                                                <input type="text" class="form-control form-filter filter-search input-sm" name="eta">
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

<div id="completed_modal" class="modal fade newmodal no-print" data-width="800" data-backdrop="static">
    <div class="modal-header bg-primary" style="height: 50px;">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title">Completed Manifest</h4>
    </div>
    <div class="modal-body">
        <form class="form-horizontal" id="complete-form" method="POST" enctype="multipart/form-data"
            action="{{ route('/')}}">
            {{ csrf_field() }}
            <input type="hidden" name="manifest_id_completed" value="">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-body" style="">
                        <div class="alert alert-danger display-hide">
                            <button class="close" data-close="alert"></button>
                            You have some form errors. Please check below.
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-10 modal-label" style="color: red !important;"></label>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4" style="margin-top:7px;">Document Received Date :
                            </label>
                            <div class="col-md-8">
                                <input type="date" class="form-control" name="docReceived_date"
                                    autocomplete="autocomplete">
                            </div>
                            <label class="control-label col-md-4" style="margin-top:7px;">POD Completed Date : </label>
                            <div class="col-md-8">
                                <input type="date" class="form-control" name="completed_date"
                                    autocomplete="autocomplete">
                            </div>
                            <label class="control-label col-md-4" style="margin-top:7px;">Port Last Day Date : </label>
                            <div class="col-md-8">
                                <input type="date" class="form-control" name="portLastDay_date"
                                    autocomplete="autocomplete">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-danger"
                    style="width:150px;border-radius: 18px !important;">Close</button>
                <button id="completeSubmit" type="submit" class="btn green"
                    style="width:150px;border-radius: 18px !important;">Submit</button>
            </div>
        </form>
    </div>
</div>

<div id="delivery_order_modal" class="modal fade newmodal no-print" data-width="400" data-backdrop="static">
    <div class="modal-header bg-primary" style="height: 50px;">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title">Generate Delivery Order</h4>
    </div>
    <div class="modal-body">
        <form class="form-horizontal" id="upload-form" method="post" enctype="multipart/form-data"
            action="{{route('/')}}" target="_blank">
            {{ csrf_field() }}
            <input type="hidden" name="cargo_id_do" value="">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-body" style="">
                        <div class="alert alert-danger display-hide">
                            <button class="close" data-close="alert"></button>
                            You have some form errors. Please check below.
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-10 modal-label" style="color: red !important;"></label>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4" style="margin-top:7px;">REMARKS</label>
                            <div class="col-md-8">
                                <div style="display: inline-flex;">
                                    <table>
                                        <tr id="remarksTR">
                                            <td style="padding-right: 10px"><input style="margin:0;" type="radio"
                                                    name="remarkRadio" value="0"></td>
                                            <td>YES</td>
                                            <td><input style="margin:0;" type="radio" name="remarkRadio" value="1"></td>
                                            <td>NO</td>
                                        </tr>
                                    </table>
                                    <input type="hidden" name="remarkRadioValue" id="remarkRadioValue" value="1">
                                </div>
                            </div>
                        </div>
                        <div class="form-group" id="remarkField" style="display: none">
                            <div class="col-md-12">
                                <textarea class="form-control" name="remarks" style="height: 90px;"
                                    placeholder="Remarks"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-danger"
                    style="width:150px;border-radius: 18px !important;">Close</button>
                <button id="doSubmit" type="submit" class="btn green"
                    style="width:150px;border-radius: 18px !important;">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
@section('footer_script')
<script src="{{asset('assets/scripts/datatable.js' )}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/datatables/datatables.min.js' )}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js' )}}" type="text/javascript">
</script>
<script src="{{asset('assets/plugins/jquery-validation/js/jquery.validate.min.js') }}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/jquery-validation/js/additional-methods.min.js') }}" type="text/javascript">
</script>
<script src="{{asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js' )}}" type="text/javascript">
</script>
<script src="{{asset('assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js') }}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/bootstrap-modal/js/bootstrap-modal.js') }}" type="text/javascript"></script>
<script src="{{asset('assets/scripts/pages/booking/booking.js') }}" type="text/javascript"></script>
<script>
function clearLocalStorage() {
    localStorage.clear();
}

function completed(e) {
    $('input[name=manifest_id_completed]').val($(e).closest('tr').find('.hide_column').html());

    $("#completed_modal").modal('show');
}

function generateDO(e) {
    $('input[name=cargo_id_do]').val($(e).closest('tr').find('.hide_column').html());


    $("#delivery_order_modal").modal('show');
    var cargoID = $(e).closest('tr').find('.hide_column').html();
    $.ajax({
        type: 'get',
        url: "{{route('/')}}",
        data: {
            _token: "{{csrf_token()}}",
            'cargoID': cargoID
        },
        success: function(data) {
            // alert('success');
            var test = $('#delivery_order_modal')[0].childNodes[3];
            console.log($('#delivery_order_modal'));
            if (data != '') {
                $('input[name=remarkRadioValue]').val('0');
                $('textarea[name="remarks"]').text(data);
                $(test).find('span').eq(0).prop("class", 'checked');
                $(test).find('span').eq(1).removeClass('checked');
                $('#remarkField').show();
            } else {
                $('input[name=remarkRadioValue]').val('1');
                $(test).find('span').eq(1).prop("class", 'checked');
                $(test).find('span').eq(0).removeClass('checked');
                $('#remarkField').hide();
            }
        }

    });
}
$('input[name="remarkRadio"]').change(function() {
    var radioVal = $(this).val();

    if (radioVal == '0') {
        $('#remarkField').show();
    } else {
        $('#remarkField').hide();
    }
});
$('input[name=remarkRadio]').click(function() {
    console.log($(this).val());
    $('input[name=remarkRadioValue]').val($(this).val());
});
</script>
@endsection