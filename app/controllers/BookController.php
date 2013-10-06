<?php

class BookController extends \BaseController {

	public function __construct(Book $book, User $user) {
		$this->book = $book;
		$this->user = $user;
	}

	public function index()
	{
		$books = $this->book->groupBy('title')->get();
		return View::make('books.index', compact('books'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$book = $this->book->add(Input::all());
		if ($book == null)
		{
			Session::flash('error', 'Invalid ISBN');
			return Redirect::route('user/profile');
		}
		return Redirect::to('books')->with('flash_success', 'Book added!');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($slug)
	{
		$books = $this->book->where('slug', $slug)->get();
		return View::make('books.book', compact('books'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
