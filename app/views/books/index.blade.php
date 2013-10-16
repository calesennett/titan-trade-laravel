@extends('layout')
@section('books')
    @if(Session::has('flash_success'))
        <div class="alert alert-success dismiss">
            <h3>{{Session::get('flash_success')}}</h3>
        </div>
    @endif

	<div class="row">
    @foreach($books as $book)
    	@if($book->thumbnail != NULL)
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <img class="thumbnail" src="{{ $book->thumbnail }}" />
            <a href="books/{{$book->slug}}">{{ $book->title }}</a>
        </div>
        @endif
    @endforeach
    </div>
@stop