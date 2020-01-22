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
                            <h2>Contacts</h2>
                        </div>
                        <div class="body">                        	
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-basic-example" role="grid">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Created Date</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($guests_data as $key => $data)
                                        <tr>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->email }}</td>
                                            <td>{{ $data->phone }}</td>
                                            <td>{{ $data->created_at }}</td>
                                            <td class="text-center py-0 align-middle">
                                                <div class="btn-group btn-group-sm">
                                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#contactdetail" class="btn btn-primary"><i class="material-icons">remove_red_eye</i></a>
                                                    <a href="#" class="btn btn-danger"><i class="material-icons">delete</i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Vertical Layout -->
        </div>    

        <div class="modal fade" id="contactdetail" tabindex="-1" role="dialog" style="display: none;">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="background-color: #343A40;">
            <form id="form_validation" method="POST" novalidate="novalidate">
                <div class="header">
                </div>
                <div class="body">
                    <div class="col-md-12 m-t-20" style = "text-align:center;">
                        <img src="../images/user.png" width="150" height="150" alt="User" class="img-circle">
                    </div>
                    <div class="col-md-12 m-t-20" style = "text-align:center;">
                        <label class="form-label" style = "font-size:20px; color:#EBECEC;">Timson Jhons</label>
                    </div>  
                    <div class="col-md-9 m-t-20">
                        <div class="form-line" id="bs_datepicker_container">   
                            <input type="text" class="form-control" placeholder = "Birthday" name="cBirthday" required="" aria-required="true">
                        </div>
                    </div>
                    <div class="col-md-3 m-t-20">
                        <select class="form-control bootstrap-select" name="cGender" style="display: none;">
                            <option value="1">Male</option>
                            <option value="0">Female</option>
                        </select>
                    </div>
                    <div class="col-md-12 m-t-15" style = "text-align:center;">
                        <input type="text" class="form-control" placeholder = "Company" name="cCompany" required="" aria-required="true">
                    </div>
                    <div class="col-md-12 m-t-15" style = "text-align:center;">
                        <input type="text" class="form-control" placeholder = "Email: example@example.com" name="cEmail" required="" aria-required="true">
                    </div>
                    <div class="col-md-12 m-t-15" style = "text-align:center;">
                        <input type="text" class="form-control" placeholder = "Mobile: +00 (000) 000-00-00" name="cMobile" required="" aria-required="true">
                    </div>
                    <div class="col-md-12 m-t-15" style = "text-align:center;">
                        <input type="text" class="form-control" placeholder = "Office: +00 (000) 000-00-00" name="cOffice" required="" aria-required="true">
                    </div>
                    <div class="col-md-12 m-t-15 m-b-40">
                        <input type="text" class="form-control" placeholder = "Notes" name="cNotes" required="" aria-required="true">
                    </div>
                </div>
                <div class="modal-footer">
                        <button type="submit" class="btn btn-primary waves-effect">Update</button>
                </div>
            </form>
            </div>
        </div>
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