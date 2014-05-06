<?php


class Cinema extends Eloquent  {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'cinemas';
	/**
	 * 
	 * @param $cinema_ids is array of cinema ids
	 * @return $cinemas array of cinema names
	 */
	
	public static function getCinemaNames ( $cinema_ids ){
		
		$cinemas =array();
		$all_names="";
		$sz = count($cinema_ids);
		
		for($k=0 ; $k < $sz; $k++){
			$cinema = Cinema::find($cinema_ids[$k]->cinema_id);
			$nm = $cinema->name;
			if (!str_contains($all_names, $nm)){
				array_push($cinemas, $cinema->name);
				$all_names =$all_names.$cinema->name;
			}		
		}
		return $cinemas;
	}
	
	
	/**
	 * add a movie session to this cinema.
	 *
	 * @return string
	 */
	public function addMovieSession($name, $dt) {
		//get movie id
		$mid = Movie::where('name', '=', $name)->get(array('id'))[0]['id'];
		SessionTime::create(array(
		'cinema_id'     => $this->id,
		'movie_id' => $mid,
		'date_time' => $dt
		)
		);
	}
	
	public function removeMovieSession($movie, $dt){
		
	}
	public function removeMovieSessions( $movie ){
		
	}
	

}