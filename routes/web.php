<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', 'RegistrationController@register');
Route::post('/register', 'RegistrationController@postRegister');
Route::get('/login', 'LoginController@login');
Route::post('/login', 'LoginController@postlogin');
Route::get('/logout', 'LoginController@logout');
Route::get('/profile', 'PageController@profile');
Route::any('/badlogin', function() {
	return view('layout.badlogin');
});
//Route::post('/register',array('as'=>'register'),'RegistrationController@postRegister');