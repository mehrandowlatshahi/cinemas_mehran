<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessionTimesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create ( 'sessiontimes', function ($table) {
			$table->increments ( 'id' );
			$table->unsignedInteger('cinema_id');
			$table->foreign('cinema_id')->references('id')->on('cinemas');
			$table->unsignedInteger('movie_id');
			$table->foreign('movie_id')->references('id')->on('movies');
			$table->dateTime('date_time');
			$table->timestamps ();
		} );
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop ( 'sessiontimes' );
	}

}
