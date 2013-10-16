@extends('layout')
@section('content')
    {{ Form::open([
        "route"        => "user/login",
        "class"        => "form-signin"
    ]) }}
    <div class="row">
            <div class="col-md-4"></div>

            <div class="col-md-4">
                <div class="form">
                    <h2 class="form_header">Login</h2>
                    <div class="input-group input">
                        <span class="input-group-addon addon"><i class="icon-user"></i></span>
                        {{ Form::text("username", Input::old("username"), [
                                      "placeholder" => "Username",
                                      "class"       => "form-control input_field"
                        ]) }}
                    </div>
                    <div class="input-group input">
                        <span class="input-group-addon addon"><i class="icon-lock"></i></span>
                        {{ Form::password("password", [
                                          "placeholder" => "Password",
                                          "class"       => "form-control input_field"
                        ]) }}
                    </div>
                    <br />
                    {{ HTML::decode(Form::button('<i class="icon-signin"></i> Login', array('type' => 'submit', 'class' => 'btn btn-success btn-block'))) }}
                </div>
                <div class="log_cont">
                    <p class="login_opt"><a href="{{ URL::route('user/register') }}">Sign up</a> | <a href="password.html">Forgot your password?</a></p>
                </div>
            </div>

            <div class="col-md-4"></div>
        </div>
    {{ Form::close() }}
@stop