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

/*Route::get('/', function()
{
	return View::make('hello');
});*/
/*Route::controller('home', 'HomeController');*/
Route::get('microblogging', 'HomeController@index');
Route::get('profile', 'HomeController@profile');
Route::get('edit', 'HomeController@edit');

Route::post('update', 'HomeController@update');
Route::post('hum', 'HomeController@hum');