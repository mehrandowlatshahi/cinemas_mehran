<?php

class Movie extends Eloquent  {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'movies';
	
	public function getMovieId( $name = "") {
		return Movie::where('name', '=', $name)->get('id');
	}

}