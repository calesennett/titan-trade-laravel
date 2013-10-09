<?php

class Book extends Eloquent {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $fillable = array('isbn');
	protected $table = 'book';

	public function add(Array $input)
	{
		$isbn = $input["isbn"];
		$book_url = "https://www.googleapis.com/books/v1/volumes?q=isbn:" . $isbn;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $book_url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$book_json = json_decode(curl_exec($ch), true);
		if (! isset($book_json["items"])) 
		{
			return null;
		}
		else
		{
			$book = new Book;
			$book->title = $book_json["items"]["0"]["volumeInfo"]["title"];
			$book->slug = $this->generateSlug($book->title);
			$book->description = $book_json["items"]["0"]["volumeInfo"]["description"];
			$book->isbn = $isbn;
			$book->thumbnail = $book_json["items"]["0"]["volumeInfo"]["imageLinks"]["thumbnail"];
			$book->user_id = Auth::user()->id;
			$book->save();
			return $book;
		}
	}

	public function generateSlug($title) 
	{
		return Str::slug($title, '-');
	}

	public function trade()
	{
		return $this->belongsTo('Trade');
	}

	public function user()
	{
		return $this->belongsTo('User');
	}

	public function category()
	{
		return $this->belongsTo('Category');
	}
}