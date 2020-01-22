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
            <div class="row clearfix">
                <div class="card margin-0 masked-input">
            <form id="form_validation" method="POST" novalidate="novalidate">
                <div class="header">
                    <div class="row d-flex align-items-center">
                        <div class="col-md-3">
                            <label class="form-label">Photo</label>
                        </div>
                        <div class="col-md-9">
                            <img src="../images/user.png" width="60" height="60" alt="User" class="img-circle">
                            <button type="button" class="btn btn-danger m-l-50">Remove</button>
                            <button type="button" class="btn btn-success m-l-20">Update</button>
                        </div>
                    </div>
                </div>
                <div class="body">
                    <div class="row form-group form-float">
                        <div class="col-md-3">
                            <label class="form-label">First Name</label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-line">   
                                <input type="text" class="form-control" name="Eventname" required="" aria-required="true">
                            </div>
                        </div>
                    </div>
                    <div class="row form-group form-float">
                        <div class="col-md-3">
                            <label class="form-label">Last Name</label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-line">   
                                <input type="text" class="form-control" name="location" required="" aria-required="true">
                            </div>
                        </div>
                    </div>
                    <div class="row form-group form-float">
                        <div class="col-md-3">
                            <label class="form-label">Company</label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-line">   
                                <input type="text" class="form-control" name="location" required="" aria-required="true">
                            </div>
                        </div>
                    </div>
                    <div class="row form-group form-float">
                        <div class="col-md-3">
                            <label class="form-label">Title</label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-line">   
                                <input type="text" class="form-control" name="location" required="" aria-required="true">
                            </div>
                        </div>
                    </div>
                    <div class="row form-group form-float">
                        <div class="col-md-3">
                            <label class="form-label">Birthday</label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-line" id="bs_datepicker_container">   
                                <input type="text" class="form-control" name="location" required="" aria-required="true">
                            </div>
                        </div>
                    </div>
                    <div class="row form-group form-float">
                        <div class="col-md-3">
                            <label class="fo
                            rm-label">Gender</label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="radio" name="Gender" id="unspecified" class="with-gap">
                                <label for="unspecified">Unspecified</label>
    
                                <input type="radio" name="Gender" id="male" class="with-gap">
                                <label for="male" class="m-l-20">male</label>

                                <input type="radio" name="Gender" id="female" class="with-gap">
                                <label for="female" class="m-l-20">Female</label>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group form-float">
                        <div class="col-md-3">
                            <label class="form-label">note</label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-line">   
                                <textarea name="note" id="note" cols="50" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group form-float">
                        <div class="col-md-3">
                            <label class="form-label">Home</label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-line d-flex align-items-center">
                                <i class="material-icons font-20 m-r-10">email</i>  
                                <input type="text" class="form-control email" name="email" placeholder="Ex: example@example.com">
                            </div>
                        </div>
                    </div>
                    <div class="row form-group form-float">
                        <div class="col-md-3">
                            <label class="form-label">moblie</label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-line d-flex align-items-center">
                                <i class="material-icons font-20 m-r-10">phone_iphone</i>
                                <input type="text" class="form-control mobile-phone-number" placeholder="Ex: +00 (000) 000-00-00">
                            </div>
                        </div>
                    </div>
                    <div class="row form-group form-float">
                        <div class="col-md-3">
                            <label class="form-label">work</label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-line d-flex align-items-center">
                                <i class="material-icons font-20 m-r-10">phone</i>
                                <input type="text" class="form-control mobile-phone-number" name="guestemplete" placeholder="Ex: +00 (000) 000-00-00" required="" aria-required="true">
                            </div>
                        </div>
                    </div>
                    <div class="row form-group form-float">
                        <div class="col-md-3">
                            <label class="form-label">Adress</label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-line d-flex align-items-center">
                                <i class="material-icons font-20 m-r-10">place</i>
                                <input type="text" class="form-control" name="guestemplete" required="" aria-required="true">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <a href="" class=" d-flex align-items-center">
                        <i class="material-icons m-r-10">add_box</i>
                        Add Field 
                    </a>
                </div>
            </form>
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