<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCinemasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create ( 'cinemas', function ($table) {
			$table->increments ( 'id' );
			$table->string ( 'name' )->unique ();
			$table->string ( 'address' );
			$table->double ( 'lat' );
			$table->double ( 'lon' );
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
		Schema::drop ( 'cinemas' );
	}

}
