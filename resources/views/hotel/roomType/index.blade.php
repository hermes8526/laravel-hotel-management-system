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
                    <ul class="nav nav-tabs" style="background-color: #F4F6FA;height: 40px;">
                    </ul>
                    <div class="tab-content no-padding">
                        <div class="tab-pane active">
                            <div class="action-toolbar">
                                <a class="btn btncolor btn-sm" style="position: absolute;top: -10vh;left: -8vw;"
                                    onclick="clearLocalStorage()" href="#">ADD</a>
                            </div>
                            <div class="table-container">
                                <table class="table table-striped table-hover" id="datatable-hotel-facility"
                                    data-url="{{route('getRoomTypes') }}">
                                    <thead>
                                        <tr role="row" class="heading">
                                            <th class="text-center"> #</th>
                                            <th class="text-center"> NAME</th>
                                            <th class="text-center"> ADULT</th>
                                            <th class="text-center"> CHILDREN</th> 
                                            <th class="text-center"> REMARK</th> 
                                            <th class="text-center"> SEQUENCE</th> 
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
                                                <input type="text" class="form-control form-filter filter-search input-sm" name="vessel">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control form-filter filter-search input-sm" name="vessel">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control form-filter filter-search input-sm" name="vessel">
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
<script src="{{asset('assets/scripts/pages/hotel/room-type.js') }}" type="text/javascript"></script>
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