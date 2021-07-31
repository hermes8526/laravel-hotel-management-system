@extends('layouts.admin')
@section('header_style')
    <link href="{{asset('assets/plugins/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css')}}" rel="stylesheet"      type="text/css"/>
    <link href="{{asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}" rel="stylesheet"      type="text/css"/>
    <style type="text/css">
        td { 
            font-size: 14px !important; 
        }
    </style>
@endsection
@section('content')     
<div class="page-content-body-wrapper no-padding">
    <div class="page-content-body no-padding"> 
        <div class="portlet light">
            <div class="portlet-body no-padding"> 
                <div class="tabbable-custom tabbable-parallel"> 
                    <div class ="tab-content no-padding"> 
                    <div class="tab-pane active" id="customer"> 
                        <div class="table-container"> 
                            <table class="table table-striped table-hover" id ="datatable-people-customer" data-url="{{ route('getStaffs') }}"> 
                                <thead> 
                                    <tr role="row" class="heading"> 
                                        <th class="text-center"> #</th> 
                                        <th class="text-center"> CODE</th> 
                                        <th class="text-center"> COMPANY NAME</th> 
                                        <th class="text-center"> EMAIL</th> 
                                        <th class="text-center"> CONTACT</th> 
                                        <th class="text-center">STATUS</th> 
                                        <th class="text-center">ACTION</th> 
                                    </tr> 
                                    <tr role="row" class="filter"> 
                                        <td></td> 
                                        <td> 
                                            <input type="text" class="form-control form-filter filter-search input-sm filter-code" name="code" placeholder="CODE"> 
                                        </td> 
                                        <td> 
                                            <input type="text" class="form-control form-filter filter-search input-sm filter-name" name="name" placeholder="COMPANY NAME"> 
                                        </td> 
                                        <td> 
                                            <input type="text" class="form-control form-filter filter-search input-sm filter-email" name="email" placeholder="EMAIL"> 
                                        </td> 
                                        <td> 
                                            <input type="text" class="form-control form-filter filter-search input-sm filter-contact" name="contact" placeholder="CONTACT"> 
                                        </td> 
                                        <td> 
                                            <input type="text" class="form-control form-filter filter-search input-sm filter-status" name="status" placeholder="STATUS"> 
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
    <script src="{{asset('assets/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js' )}}"
            type="text/javascript"></script>
    <script src="{{asset('assets/plugins/jquery-validation/js/jquery.validate.min.js') }}"
            type="text/javascript"></script>
    <script src="{{asset('assets/plugins/jquery-validation/js/additional-methods.min.js') }}"
            type="text/javascript"></script>
    <script src="{{asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js' )}}"
            type="text/javascript"></script>
    <script src="{{asset('assets/scripts/pages/people/customer.js') }}" type="text/javascript"></script> 

@endsection
