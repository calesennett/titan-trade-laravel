@extends("layout")
@section("content")
    {{ Form::open([
        "route"        => "user/register",
        "autocomplete" => "off"
    ]) }}
        {{ Form::label("username", "Username") }}
        {{ Form::text("username", Input::old("username"), [
            "placeholder" => "username"
        ]) }}
        {{ Form::label("password", "Password") }}
        {{ Form::password("password", [
            "placeholder" => "●●●●●●●●●●"
        ]) }}
        {{ Form::submit("Register") }}
    {{ Form::close() }}
@stop
@section("footer")
@stop