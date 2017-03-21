@extends('layouts.app')

@section('title')
    Login
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form class="form form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                <div class="box" style="border-radius: 5px;">
                    <div class="box-header" style="padding: 25px 20px">Login</div>
                    <div class="box-body">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="control-label col-md-4">E-Mail Address</label>
                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control input-lg" name="email" value="{{ isset($demo) ? 'demo@simful.com' : old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="control-label col-md-4">Password</label>
                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control input-lg" name="password" value="{{ isset($demo) ? 'demo' : '' }}" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box-footer">

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="fa fa-sign-in fa-icon"></i>
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
