@section('book')
	
	@foreach($books as $book)
		<div>
			
			<h3>Title: {{ $book->title }}, User: {{ $book->user->username }}</h3>
			<a href="{{$book->slug}}/request/{{$book->user_id}}">Request</a>

		</div>
	@endforeach
@show