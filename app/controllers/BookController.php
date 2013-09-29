<?php

class BookController extends \BaseController {

	public function __construct(Book $book) {
		$this->book = $book;
	}

	public function index()
	{
		$books = Book::all();
		return $books;
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
		$book = Book::create(array("isbn" => Input::get("isbn")));
		var_dump("$book");
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($isbn)
	{
		$book_url = "https://www.googleapis.com/books/v1/volumes?q=isbn:" . $isbn;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $book_url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$book_json = json_decode(curl_exec($ch), true);
		$thumbnail = $book_json["items"]["0"]["volumeInfo"]["imageLinks"]["thumbnail"];
		return View::make('thumbnail')->with('thumbnail', $thumbnail);
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