@extends('layout')
@section('books')
	<div class="row">
    @foreach($books as $book)
    	@if($book->thumbnail != NULL)
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <img class="thumbnail" src="{{ $book->thumbnail }}" />
            <a href="books/{{$book->isbn}}">{{ $book->title }}</a>
        </div>
        @endif
    @endforeach
</div>
@stop