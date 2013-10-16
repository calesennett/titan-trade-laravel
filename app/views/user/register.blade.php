@extends("layout")
@section("content")
    {{ Form::open([
        "route"        => "user/register"
    ]) }}

    <div class="row">
            <div class="col-md-2 col-md-offset-5">
                <div class="login">
                    <h2 class="form_header">Sign up</h2>
                    <div class="input-group input">
                        <span class="input-group-addon addon"><i class="icon-envelope"></i></span>
                        {{ Form::text("username", Input::old("username"), [
            "placeholder" => "username", 'class' => 'form-control input_field'
        ]) }}
                        <input type="email" class="form-control input_field" id="email" placeholder="Email">
                    </div>
                    <div class="input-group input">
                        <span class="input-group-addon addon"><i class="icon-user"></i></span>
                        <input type="text" class="form-control input_field" id="username" placeholder="Username">
                    </div>
                    <div class="input-group input">
                        <span class="input-group-addon addon"><i class="icon-lock"></i></span>
                        <input type="password" class="form-control input_field" id="password" placeholder="Password">
                    </div>
                    <div class="input-group input">
                        <span class="input-group-addon addon"><i class="icon-lock"></i></span>
                        <input type="password" class="form-control input_field" id="password" placeholder="Confirm password">
                    </div>
                    <br />
                    <button type="submit" class="btn btn-success btn-block">
                        <i class="icon-ok"></i> Sign up
                    </button>
                </div>
                <div class="log_cont">
                    <p class="login_opt"><a href="login.html">Log in</a> | <a href="password.html">Forgot your password?</a></p>
                </div>
            </div>
        </div>

        @if(Session::has('domain_error'))
            <div class="alert alert-danger">
                <h3> {{ Session::get('domain_error') }} </h3>
            </div>
        @endif
        
        <!--{{ Form::label("email", "Email") }}
        {{ Form::text("email", Input::old("email"), [
            "placeholder" => "email"
        ]) }}
        {{ Form::label("password", "Password") }}
        {{ Form::password("password", [
            "placeholder" => "●●●●●●●●●●"
        ]) }}
        {{ Form::label("password_confirmation", "Confirm password")}}
        {{ Form::password("password_confirmation", [
            "placeholder" => "●●●●●●●●●●"
        ]) }}
        {{ Form::submit("Register") }}
        -->
    {{ Form::close() }}
@stop