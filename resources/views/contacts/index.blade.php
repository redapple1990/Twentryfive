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
                            <div class="pull-right">
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#newContact" style="height: 100%;/* border: 1px solid red; */padding: 7px 10px;background: #2b982b;color: white;border-radius: 50px;">Add Contacts</a>
                            </div>
                        </div>
                        <div class="body">                        	
                            <div class="table-responsive">
                                <table class="table table-hover dataTable js-basic-example">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Created Date</th>
                                            <th>Detail</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($guests_data as $key => $data)
                                        <tr>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->email }}</td>
                                            <td>{{ $data->phone }}</td>
                                            <td>{{ $data->created_at }}</td>
                                            <td>
                                                {{-- <a href="javascript:void(0);" class="js-user-right-sidebar" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                                                    More...
                                                </a> --}}
                                                <div class="btn-group btn-group-sm">
                                                    <a href="#" class="btn btn-primary"><i class="material-icons">remove_red_eye</i></a>
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

        <div class="modal fade" id="newContact" tabindex="-1" role="dialog" style="display: none;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form id="form_validation" action="{{ url('contacts/store') }}" method="POST" novalidate="novalidate">
                {{ csrf_field() }}
                    <div class="modal-header">
                        <h4 class="modal-title" id="largeModalLabel">New Contact</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row form-group form-float">
                            <div class="col-md-3">
                                <label class="form-label">Name</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-line">   
                                    <input type="text" class="form-control" name="guest_name" required="" aria-required="true">
                                </div>
                            </div>
                        </div>
                        <div class="row form-group form-float">
                            <div class="col-md-3">
                                <label class="form-label">Email</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-line">   
                                    <input type="text" class="form-control" name="guest_email" required="" aria-required="true">
                                </div>
                            </div>
                        </div>
                        <div class="row form-group form-float">
                            <div class="col-md-3">
                                <label class="form-label">Phone</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-line">   
                                    <input type="text" class="form-control" name="guest_phone" required="" aria-required="true">
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