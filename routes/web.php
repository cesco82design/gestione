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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/register', array( 'as' => 'register','uses' => 'PagesController@register'));
Route::any('/',array('as' => 'index','uses' => 'PagesController@index'));
Route::get('/login', function () {
    return view('_layout.login');
});
