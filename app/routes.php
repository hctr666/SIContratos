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

/*Route::get('prueba', function(){
	$user = new User();
	$user->email = "hctr.441@gmail.com";
	$user->real_name = "hctr666";
	$user->password = "4n4lv0m1t";
	$user->save();
	return "<script>alert('El usuario ha sido registrado :)');</script>";
});*/

#Route::controller("user", "UserController");
Route::get('login', 'AuthController@get_login');
Route::post('login', 'AuthController@post_login');
Route::group(array('before' => 'auth'), function(){
	Route::get('/', function(){
		return View::make('hello');
	});

	Route::get('user', 'UserController@get_index');
	Route::get('user/create', 'UserController@get_create');
	Route::get('user/update/{id}', "UserController@get_update");
});