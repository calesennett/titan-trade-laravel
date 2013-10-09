<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTradeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trade', function(Blueprint $table)
		{
			$table->increments('id');
			$table->boolean('pending')
				  ->default(0);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('trade');
	}

}
