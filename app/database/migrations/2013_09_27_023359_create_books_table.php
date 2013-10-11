<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration {

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
			$table->string('title')
				  ->nullable()
				  ->default(null);
			$table->text('description', 10000)
				  ->nullable()
				  ->default(null);
			$table->string('isbn')
			      ->nullable()
				  ->default(null);
			$table->string('thumbnail')
			      ->nullable()
			      ->default(null);
			$table->integer('user_id')
				  ->nullable()
				  ->default(null);
			$table->integer('trade_id')
				  ->nullable()
				  ->default(null);
			$table->string('slug')
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
