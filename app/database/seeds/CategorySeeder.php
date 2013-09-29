<?php

class CategorySeeder 
extends DatabaseSeeder
{

	public function run()
	{
		$categories = [
			[
				"category_name" => "Math"
			],
			[
				"category_name" => "Computer Science"
			]

		];

		foreach ($categories as $category) {
			Category::create($category);
		}
	}

}