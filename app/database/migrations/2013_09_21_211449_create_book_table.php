<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('book', function(Blueprint $table)
		{
			$table->increments('id');
			$table
				->string("title")
				->nullable()
				->default(null);

			$table
				->string("isbn")
				->nullable()
				->default(null);

			$table
				->text("description", 1000)
				->nullable()
				->default(null);

			$table
				->string("category")
				->nullable()
				->default(null);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('book');
	}

}
