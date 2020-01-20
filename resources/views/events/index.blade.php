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
                        </div>
                        <div class="body">                        	
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-basic-example" role="grid">
                                    <thead>
                                        <tr>
                                            <th>Event</th>
                                            <th>Date</th>
                                            <th>Location</th>
                                            <th>Approved</th>
                                            <th>Pending</th>
                                            <th>Declined</th>
                                            <th>Public</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($events_data as $key => $data)
                                        <tr>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->datetime }}</td>
                                            <td>{{ $data->location }}</td>
                                            @php $app_num = Helper::getApprovedForEvent($data->id); @endphp
                                            <td>{{$app_num}}</td>
                                            @php $app_num = Helper::getPendingForEvent($data->id); @endphp
                                            <td>{{$app_num}}</td>
                                            @php $app_num = Helper::getDeclinedForEvent($data->id); @endphp
                                            <td>{{$app_num}}</td>
                                            {{-- <td class="justify-content-between align-items-center">
                                                <span>Public</span>
                                                <ul style="list-style-type: none;" class="padding-0 margin-0">
                                                    <li class="dropdown">
                                                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                            <i class="material-icons">keyboard_arrow_down</i>
                                                        </a>
                                                        <ul class="dropdown-menu pull-right">
                                                            <li><a href="javascript:void(0);">Public</a></li>
                                                            <li><a href="javascript:void(0);">Private</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </td> --}}
                                            <td class="text-center py-0 align-middle">
                                                {{-- <div class="col-xs-8 p-t-5"> --}}
                                                    <input type="checkbox" id="remember_me" class="filled-in">
                                            </td>
                                            <td class="text-center py-0 align-middle">
                                                <div class="btn-group btn-group-sm" role="group">
                                                    <a href="{{ route('events/event', ['event' => $data->id]) }}" class="btn btn-primary"><i class="material-icons">remove_red_eye</i></a>
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