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
                        <div class="header d-flex justify-content-between align-items-center">
                            <h2>Admins</h2>
                            <div class="pull-right">
                                <a href="javascript:void(0);" class="d-flex align-items-center">
                                    <i class="material-icons font-30 m-r-10">add_box</i>
                                    Add Users
                                </a>
                            </div>
                        </div>
                        <div class="body">                        	
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover dataTable js-basic-example">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Created Date</th>
                                            <th>operation</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                admin
                                            </td>
                                            <td>admin@admin.com</td>
                                            <td>1234456789</td>
                                            <td>2019-11-10</td>
                                            <td>
                                                <a href="" class="btn btn-success" data-toggle="modal" data-target="#adminedit">Edit</a>
                                                <a href="" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>User</td>
                                            <td>User@user.com</td>
                                            <td>1234456789</td>
                                            <td>2019-11-10</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Justin</td>
                                            <td>justin@justin.com</td>
                                            <td>1234456789</td>
                                            <td>2019-11-10</td>
                                            <td></td>
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

<div class="modal fade" id="adminedit" tabindex="-1" role="dialog" style="display: none;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form id="form_validation" method="POST" novalidate="novalidate">
                <div class="modal-header">
                    <h4 class="modal-title" id="largeModalLabel">New Event</h4>
                </div>
                <div class="modal-body">
                    <div class="">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs tab-nav-right" role="tablist">
                            <li role="presentation" class="active w-50"><a href="#user-settings" data-toggle="tab" aria-expanded="true">User Settings</a></li>
                            <li role="presentation" class="w-50"><a href="#permissions" data-toggle="tab" aria-expanded="false">Permissions</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane animated flipInX active" id="user-settings">
                                <b>Home Content</b>
                                <p>
                                    Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                    Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent
                                    aliquid pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere
                                    gubergren sadipscing mel.
                                </p>
                            </div>
                            <div role="tabpanel" class="tab-pane animated flipInX" id="permissions">
                                <b>Profile Content</b>
                                <p>
                                    Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                    Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent
                                    aliquid pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere
                                    gubergren sadipscing mel.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-link waves-effect">Submit</button>
                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                </div>
            </form>
        </div>
    </div>
</div>

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