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

Route::get('services', ['as' => 'services', 'uses' => 'ServicesController@getServices']);
Route::get('payment/{price}/{service_name}', ['as' => 'payment', 'uses' => 'PaymentsController@comproPago']);

Route::get('getCardsServices', 'RestController@getCardsServices');
Route::get('getCardsPackages', 'RestController@getCardsPackages');
Route::get('getServices/{type}', 'RestController@getServices');
Route::get('getPackages/{type}', 'RestController@getPackages');

Route::group(['middleware' => 'auth'], function() {

    Route::group(['namespace'=>'Packages'], function() {
        Route::pattern('package', '[0-9]+');
        Route::resource('package', 'PackagesController');
    });

});



