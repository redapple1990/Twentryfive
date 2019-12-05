@extends('index')

@section('title')
	Form
@endsection

@section('extra-css')
<!-- Colorpicker Css -->
    {{ Html::style('bsbmd/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css') }}

    <!-- Dropzone Css -->
    {{ Html::style('bsbmd/plugins/dropzone/dropzone.css') }}

    <!-- Multi Select Css -->
    {{ Html::style('bsbmd/plugins/multi-select/css/multi-select.css') }}

    <!-- Bootstrap Spinner Css -->
    {{ Html::style('bsbmd/plugins/jquery-spinner/css/bootstrap-spinner.css') }}

    <!-- Bootstrap Tagsinput Css -->
    {{ Html::style('bsbmd/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}

    <!-- Bootstrap Select Css -->
    {{ Html::style('bsbmd/plugins/bootstrap-select/css/bootstrap-select.css') }}

    <!-- noUISlider Css -->
    {{ Html::style('bsbmd/plugins/nouislider/nouislider.min.css') }}

     <!-- JQuery DataTable Css -->
    {{ Html::style('bsbmd/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}
	
@endsection

@section('content')
        <div class="container-fluid">

            <!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>List of Events</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">                        	
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover dataTable js-basic-example">
                                    <thead>
                                        <tr>
                                        	<th class="non-sorting">
                                                <input type="checkbox" id="indeterminate-checkbox" checked="checked" class="filled-in"/>
                                            </th>
                                            <th>Event</th>
                                            <th>Date</th>
                                            <th>Approved</th>
                                            <th>Pending</th>
                                            <th>Declined</th>
                                            <th>status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <input type="checkbox" checked="checked" />
                                            </td>
                                            <td>Event Sample</td>
                                            <td>Date</td>
                                            <td>20</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td class="d-flex align-items-center">
                                                <a href="javascript:void(0);" class="d-flex align-items-center"><i class="material-icons m-r-10">add_box</i>New Guest List Entry</a>
                                                <a href="" class="m-l-30"><span class="bg-red font-14 inbox-level text-center p-t-8 p-b-8 p-l-20 p-r-20">Public</span></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" checked="checked" /></td>
                                            <td>Event Sample</td>
                                            <td>Date</td>
                                            <td>20</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td class="d-flex align-items-center">
                                                <a href="javascript:void(0);" class="d-flex align-items-center"><i class="material-icons m-r-10">add_box</i>New Guest List Entry</a>
                                                <a href="" class="m-l-30"><span class="bg-red font-14 inbox-level text-center p-t-8 p-b-8 p-l-20 p-r-20">Public</span></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" class="fill-in">
                                            </td>
                                            <td>Event Samples</td>
                                            <td>Date</td>
                                            <td>20</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td class="d-flex align-items-center">
                                                <a href="javascript:void(0);" class="d-flex align-items-center"><i class="material-icons m-r-10">add_box</i>New Guest List Entry</a>
                                                <a href="" class="m-l-30"><span class="bg-red font-14 inbox-level text-center p-t-8 p-b-8 p-l-20 p-r-20">Public</span></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Vertical Layout -->
           
        </div>
@endsection

@section('extra-script')
	{{Html::script('bsbmd/plugins/autosize/autosize.js')}}
	{{Html::script('bsbmd/plugins/momentjs/moment.js')}}
	{{Html::script('bsbmd/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}
	{{Html::script('bsbmd/js/pages/forms/basic-form-elements.js')}}	
    {{Html::script('bsbmd/plugins/jquery-validation/jquery.validate.js')}}
    {{Html::script('bsbmd/plugins/jquery-steps/jquery.steps.js')}}
    {{Html::script('bsbmd/plugins/sweetalert/sweetalert.min.js')}}
    {{Html::script('bsbmd/js/pages/forms/form-validation.js')}}

    <!-- Jquery DataTable Plugin Js -->
    {{Html::script('bsbmd/plugins/jquery-datatable/jquery.dataTables.js')}}	
    {{Html::script('bsbmd/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}	
    {{Html::script('bsbmd/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}	
    {{Html::script('bsbmd/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')}}	
    {{Html::script('bsbmd/plugins/jquery-datatable/extensions/export/jszip.min.js')}}	
    {{Html::script('bsbmd/plugins/jquery-datatable/extensions/export/pdfmake.min.js')}}	
    {{Html::script('bsbmd/plugins/jquery-datatable/extensions/export/vfs_fonts.js')}}	
    {{Html::script('bsbmd/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')}}	
    {{Html::script('bsbmd/plugins/jquery-datatable/extensions/export/buttons.print.min.js')}}	
    {{Html::script('bsbmd/js/pages/tables/jquery-datatable.js') }}
@endsection