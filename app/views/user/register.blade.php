@extends("layout")
@section("content")
    {{ Form::open([
        "route"        => "user/register",
        "autocomplete" => "off"
    ]) }}

        @if(Session::has('domain_error'))
            <div class="alert alert-danger">
                <h3> {{ Session::get('domain_error') }} </h3>
            </div>
        @endif
        {{ Form::label("username", "Username") }}
        {{ Form::text("username", Input::old("username"), [
            "placeholder" => "username"
        ]) }}
        {{ Form::label("email", "Email") }}
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
    {{ Form::close() }}
@stop