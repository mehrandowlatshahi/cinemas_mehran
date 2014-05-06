<?php

class Movie extends Eloquent  {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'movies';
	/**
	 * 
	 * @param list of $movie_ids
	 * @return movies array of movie names:
	 */
	
	public static function getMovieNames( $movie_ids ){
	
		$movies =array();
		$all_names="";
		$sz = count($movie_ids);
	
		for($k=0 ; $k < $sz; $k++){
			$movie = Movie::find($movie_ids[$k]->movie_id);
			$nm = $movie->name;
			if (!str_contains($all_names, $nm)){
				array_push($movies, $nm);
				$all_names =$all_names.$nm;
			}
		}
		return $movies;
	}

}