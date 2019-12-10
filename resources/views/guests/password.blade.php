@extends('auth.app')

@section('content')
@if (session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif
<form class="form-horizontal" role="form" method="POST" action="{{ route('password.request') }}">
    {{-- {{ csrf_field() }}
    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} form-inline">
        <label for="password" class="col-md-4 control-label">Password</label>
        <div class="col-md-6">
            <input id="password" type="password" class="form-control" name="password" required>
            @if ($errors->has('password'))
            <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif
        </div>
    </div> --}}
    <div class="input-group">
        <label for="password" class="text-left control-label">Password</label>
        <span class="input-group-addon">
            <i class="material-icons">lock</i>
        </span>
        <div class="form-line">
            <input type="password" class="form-control" name="password" placeholder="Password" required="" aria-required="true" aria-invalid="false">
        </div>
    </div>
    <div class="input-group">
        <label for="password" class="text-left control-label">This Request is for:</label>
        <div class="switch text-center m-t-10">
            <label>Myself<input type="checkbox" checked=""><span class="lever"></span>Someone else</label>
        </div>
    </div>
    <div class="input-group">
        <select class="form-control bootstrap-select" data-live-search="true" style="display: none;">
            <option value="">Event Drop Down</option>
            <option value="10">10</option>
            <option value="20">20</option>
            <option value="30">30</option>
            <option value="40">40</option>
            <option value="50">50</option>
        </select>
    </div>
    <div class="form-group">
        <div class="col-md-12 text-center">
            <a type="submit" class="btn btn-success text-white">
            Submit
            </a>
        </div>
    </div>
</form>
@endsection
