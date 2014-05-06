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


Route::get('cinema/{name?}', function( $name = "" )
{
	return Cinema::where('name', '=', $name)->get(array('id'))[0]['id'];

});

Route::get('movie/{name?}', function( $movie_name = "" )
{

	//return $cinema_ids[0]->cinema_id;
	return SessionTime::getCinemasByMovieName($movie_name);
	//return movie::where('name', '=', $movie_name)->get();

});

