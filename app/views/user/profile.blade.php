@extends("layout")
@section("content")
	<h2>Hello, {{ Auth::user()->username }}</h2>
	<p>Welcome to your profile.</p>
	{{ Form::open([
        "url"        => "books"
    ]) }}
        @if(Session::has('error'))
            <div class="alert alert-danger">
                <p>{{ Session::get('error') }}</p>
            </div>
        @endif

        @if(Session::has('req_error'))
            <div class="alert alert-danger">
                <p>{{ Session::get('req_error') }}</p>
            </div>
        @endif

        @if(Session::has('req_success'))
            <div class="alert alert-success">
                <p>{{ Session::get('req_success') }}</p>
            </div>
        @endif
        {{ Form::text("isbn", Input::old("isbn"), [
            "placeholder" => "ISBN10"
        ]) }}
        {{ Form::submit("Add Book") }}
    {{ Form::close() }}
@stop