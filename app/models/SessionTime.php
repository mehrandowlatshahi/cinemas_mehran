<?php



class SessionTime extends Eloquent  {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'sessiontimes';
	
	public static function addMovieSession($c_name, $m_name, $dt) {
		//get movie id
		$mid = Movie::where('name', '=', $m_name)->get(array('id'))[0]['id'];
		$cid = Cinema::where('name', '=', $c_name)->get(array('id'))[0]['id'];
		SessionTime::create(array(
		'cinema_id'     => $cid,
		'movie_id' => $mid,
		'date_time' => $dt
		)
		);
	}
	
	/**
	 * Get the column name for the "remember me" token.
	 *
	 * @return string
	 */
	public static function getCinemasByMovieName($movie_name)
	{
		//TODO split into query and then array size check to confirm
		$mid = Movie::where('name', '=', $movie_name)->get(array('id'))[0]->id;
		
		$cinema_ids = SessionTime::where('movie_id', '=', $mid)->get(array('cinema_id'));
		
		return Cinema::getCinemaNames($cinema_ids) ;
	}
	
	public static function getMoviesByCinemaName($name){
		
		$cid = Cinema::where('name', '=', $name)->get(array('id'))[0]['id'];
		
		$movie_ids = SessionTime::where('cinema_id', '=', $cid)->get(array('movie_id'));
				
		return Movie::getMovieNames($movie_ids) ;
		
	}
	
	

}