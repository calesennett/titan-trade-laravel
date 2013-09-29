@extends("layout")
@section("content")
    <h2 id="lblLogin" class="form-signin">Please log in</h2>
    {{ Form::open([
        "route"        => "user/login",
        "class"        => "form-signin"
    ]) }}

        {{ Form::text("username", Input::old("username"), [
            "placeholder" => "Email address",
            "class"       => "form-control"
        ]) }}
        {{ Form::password("password", [
            "placeholder" => "●●●●●●●●●●",
            "class"       => "form-control"
        ]) }}
        {{ Form::submit("Login", [
            "class"       => "btn btn-lg btn-primary btn-block"
        ]) }}
    {{ Form::close() }}
@stop