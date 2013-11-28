@extends('layout')
@section('books')
    @if(Session::has('flash_success'))
        <div class="alert alert-success dismiss">
            <h3>{{Session::get('flash_success')}}</h3>
        </div>
    @endif
    <div class="container">
	<div class="row">
        @if($books->count())
            @foreach($books as $book)
            	@if($book->thumbnail != NULL)
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="book-img">
                            <a href="books/{{$book->slug}}">
                            <div class="img-wrap">
                                <img src="{{ $book->thumbnail }}">
                            </div>
                            <div class="details">
                                <h3>{{ $book->title }}</h3>
                                <p>{{ substr($book->description, 0, 200) }}...</p>
                            </div>
                            </a>
                        </div>
                    </div>  
                @endif
            @endforeach
            </div>
        @else
            <h3>No books listed yet. Add one!</h3>
        @endif
    </div>
    </div>
@stop