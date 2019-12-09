<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Your Title</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Bootstrap Core Css -->
    @section('css')
        {{ Html::style('bsbmd/plugins/bootstrap/css/bootstrap.css') }}
        {{ Html::style('bsbmd/plugins/node-waves/waves.css') }}
        {{ Html::style('bsbmd/plugins/animate-css/animate.css') }}
        {{ Html::style('bsbmd/plugins/morrisjs/morris.css') }}
        {{ Html::style('bsbmd/css/style.css') }}
        {{ Html::style('bsbmd/css/themes/all-themes.css') }}
        {{ Html::style('bsbmd/plugins/bootstrap-select/css/bootstrap-select.min.css')}}
        {{ Html::style('bsbmd/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}
        {{ Html::style('bsbmd/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css')}}


         <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    
    @show

    @yield('extra-css')
</head>

<body class="theme-red">
    @include('layouts.partials.loader')
    <div class="overlay"></div>
    @include('layouts.partials.header')
    @include('layouts.partials.sidebar')

    <section class="content">
         @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif


        @if(Route::is('dashboard'))
            @include('layouts.dashboard.index')
        @endif

        @yield('content')
    </section>

    @section('script')
        {{Html::script('bsbmd/plugins/jquery/jquery.min.js')}}
        {{Html::script('bsbmd/plugins/bootstrap/js/bootstrap.js')}}
        {{Html::script('bsbmd/plugins/bootstrap-select/js/bootstrap-select.js')}}
        {{Html::script('bsbmd/plugins/jquery-slimscroll/jquery.slimscroll.js')}}
        {{Html::script('bsbmd/plugins/node-waves/waves.js')}}

        {{Html::script('bsbmd/plugins/momentjs/moment.js')}}

        {{Html::script('bsbmd/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}
        {{Html::script('bsbmd/plugins/bootstrap-select/js/bootstrap-select.min.js')}}

        {{-- {{Html::script('bsbmd/plugins/jquery-inputmask/inputmask/inputmask.js')}}
        {{Html::script('bsbmd/plugins/multi-select/js/jquery.multi-select.js')}} --}}
        
        {{Html::script('bsbmd/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}
        {{Html::script('bsbmd/plugins/dropzone/dropzone.js')}}
        {{Html::script('bsbmd/js/pages/forms/advanced-form-elements.js')}}

        {{Html::script('bsbmd/plugins/jquery-inputmask/jquery.inputmask.bundle.js')}}
        {{Html::script('bsbmd/js/pages/forms/basic-form-elements.js')}}
        {{Html::script('bsbmd/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}

     

        
    @show    
    @yield('extra-script')
    @section('script-bottom')
        {{Html::script('bsbmd/js/admin.js')}}
        {{Html::script('bsbmd/js/demo.js')}}
    @show
</body>

</html>
