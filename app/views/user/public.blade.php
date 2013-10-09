@extends("layout")
@section("profile")
	<p>Welcome to {{ $user->username }}'s profile.</p>

    <div class="row">
    @foreach($books as $book)
        @if($book->thumbnail != NULL)
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <img class="thumbnail" src="{{ $book->thumbnail }}" />
            <a href="">{{ $book->title }}</a>
            <p>Belongs to: {{ $book->user->username }}</p>
        </div>
        @endif
    @endforeach
    </div>
@show