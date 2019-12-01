@extends('layouts.auth')

@section('content')
    <div class="row">
        <h1 class="text-center" style="margin-top: 10px;margin-bottom: 50px;font-weight: bold;">TWENTYFIVE/SEVEN</h1>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">
            <form role="form" method="POST" action="{{ url('signup') }}" style="background: #e2e2e2;padding: 20px;margin-bottom: 15px;background: #f7f7f7;box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);padding: 30px;">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <h3 class="text-center" style="margin-top: 0;margin-bottom: 20px;">SIGNUP</h3>
                <div class="form-group">
        	        <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required="required">
                    </div>
                </div>
		        <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                    </div>
                </div>        
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-block login-btn">Sign in</button>
                </div>
                <div class="text-center social-btn" style = "margin-bottom: 10px;">
                    <a href="#" class="btn btn-primary btn-block"><i class="fa fa-facebook"></i> Sign in with <b>Facebook</b></a>
			        <a href="#" class="btn btn-danger btn-block"><i class="fa fa-google"></i> Sign in with <b>Google</b></a>
                </div>
                <div class="clearfix">
                    <label class="pull-left checkbox-inline"><input type="checkbox" name="remember"> Remember me</label>
                    <a href="{{ route('auth.password.reset') }}" class="pull-right text-success">Forgot Password?</a>
                </div>  
            </form>
            <div class="hint-text small" style="text-align: center;">Don't have an account? <a href="#" class="text-success">Register Now!</a></div>
        </div>
    </div>
@endsection