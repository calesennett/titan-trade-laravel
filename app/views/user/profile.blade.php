@extends("layout")
@section("content")
	<h2>Hello, {{ Auth::user()->username }}</h2>
	<p>Welcome to your profile.</p>
	{{ Form::open([
        "url"        => "books"
    ]) }}

    @foreach($books as $book)
        <div class="book">
            <p>{{ $book->title }}</p>
            <p>{{ $book->description }}</p>
        </div>
    @endforeach

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
        <div class="input-group input">
            {{ Form::text("isbn", Input::old("isbn"), [
            "placeholder" => "ISBN 10",
            "class"       => "form-control isbn"
        ]) }}
        {{ Form::submit("Add Book", ["class" => "btn btn-primary"]) }}

        </div>
    {{ Form::close() }}
@stop