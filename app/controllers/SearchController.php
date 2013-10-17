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
		$books = $query 
				? $this->book->search($query)->get()
				: $this->book->groupBy('title')->get();
		return View::make('books.index', compact('books'));
		
	}
}