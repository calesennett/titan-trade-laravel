@extends("layout")
@section("content")
	<h2>Hello, {{ Auth::user()->username }}</h2>
	<p>Welcome to your profile.</p>

	{{ Form::open([
        "route"        => "books/store"
    ]) }}
        {{ Form::label("isbn", "ISBN10") }}
        {{ Form::text("isbn", Input::old("isbn"), [
            "placeholder" => "ISBN10"
        ]) }}
        {{ Form::submit("Add Book") }}
    {{ Form::close() }}
@stop