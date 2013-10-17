<?php

class SearchController
extends Controller
{

	public function __construct(Book $book)
	{
		$this->book = $book;
	}

	public function index()
	{

		$query = Request::get('q');
		$books = $this->book->where('title', 'LIKE', "%$query%")->orWhere('isbn', "$query")->groupBy('title')->get();
		return View::make('books.index', compact('books'));
		
	}
}