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

Auth::routes();
Route::get('logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index');

Route::get('getCardsServices', 'RestController@getCardsServices');
Route::get('getCardsPackages', 'RestController@getCardsPackages');
Route::get('getServices/{type}', 'RestController@getServices');
Route::get('getPackages/{type}', 'RestController@getPackages');



