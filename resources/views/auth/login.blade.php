@extends('auth.app')

@section('content')
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<form id="sign_in" role="form" method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}
    <p class="msg"></p>
    <div class="input-group">
        <span class="input-group-addon">
            <i class="material-icons">email</i>
        </span>
        <div class="form-line {{ $errors->has('email') ? ' error' : '' }}">
            <input type="text" class="form-control" name="email" value="{{old('email')}}" placeholder="Email" required autofocus>
        </div>
        @if ($errors->has('email'))
        <label id="name-error" class="error" for="email">{{ $errors->first('email') }}</label>
        @endif
    </div>
    <div class="input-group">
        <span class="input-group-addon">
            <i class="material-icons">lock</i>
        </span>
        <div class="form-line {{ $errors->has('password') ? ' error' : '' }}">
            <input type="password" class="form-control" name="password" value="{{old('password')}}" placeholder="Password" required>
        </div>
        @if ($errors->has('password'))
        <label id="name-error" class="error" for="name">{{ $errors->first('password') }}</label>
        @endif
    </div>
    <div class="row">
        <div class="col-xs-8 p-t-5">
            <input type="checkbox" name="remember" class="filled-in chk-col-black d-none" id="rememberme">
            <label for="rememberme">Remember Me</label>
        </div>
        <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
        </div>
    </div>
    <div class="row text-center">
        <div class="m-b-20 m-t-20">
            <button class="btn btn-primary btn-lg waves-effect btn-social">
                <i class="fa fa-facebook-f m-r-20"></i>Sign in with Facebook
            </button>
        </div>
        <div class="m-b-20">
            <button class="btn btn-danger btn-lg waves-effect btn-social">
                <i class="fa fa-google m-r-20"></i>Sign in with Google
            </button>
        </div>
    </div>
    <div class="row p-b-10" style="border-bottom: 2px solid lightgray;">
        <div class="col-xs-6">
            <a href="{{route('register')}}">Register Now!</a>
        </div>
        <div class="col-xs-6 align-right">
            <a href="{{ route('password.request') }}">Forgot Your Password?</a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 text-center m-t-15">
            <a href="{{ route('guests')}}" class="btn btn-block btn-primary btn-lg bg-pink waves-effect">Continue as Guest</a>
        </div>
    </div>
</form>
@endsection
