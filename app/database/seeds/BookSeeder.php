<?php

class BookSeeder 
extends DatabaseSeeder
{

	public function run()
	{
		$books = [
			[
				"title" 	  => "Discrete Mathematics",
				"isbn"  	  => "1449604420",
				"description" => "This is the description for the Discrete Mathematics book."
			],
			[
				"title" 	  => "American Government",
				"isbn"  	  => "0205865801",
				"description" => "This is the description for the American Government book."
			]

		];

		foreach ($books as $book) {
			Book::create($book);
		}
	}

}