<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('cinemas', function()
{	
	return Cinema::lists('name');
});


Route::get('cinema/details/{name?}', function( $name = "" )
{
	return Cinema::where('name', '=', $name)->get();

});

Route::get('movie/cinemas/{name?}', function( $movie_name = "" )
{

	//return $cinema_ids[0]->cinema_id;
	return SessionTime::getCinemasByMovieName($movie_name);
	//return movie::where('name', '=', $movie_name)->get();

});

Route::get('cinema/movies/{name?}', function( $name = "" )
{
	//return SessionTime::getMoviesByCinemaName( $name );
	return Response::json(SessionTime::getMoviesByCinemaName( $name ));
	//Response::json(array('name' => 'Steve', 'state' => 'CA'));
	
});

Route::get('cinema/movies/{name?}/{before?}/{after?}', function( $name = "", $before = "2014-05-05 10:30:00", $after = "9114-05-05 10:30:00" )
{
	//return SessionTime::getMoviesByCinemaName( $name );
	return Response::json(SessionTime::getMoviesByCinemaNameAndDates($name, $before, $after));
	//Response::json(array('name' => 'Steve', 'state' => 'CA'));

});
