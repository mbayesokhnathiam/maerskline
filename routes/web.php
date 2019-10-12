<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'shipping', 'middleware' => 'auth'], function () {
    Route::get('/', 'ShippingController@index')->name('shipping-lines');

});

Route::group(['prefix' => 'vessels', 'middleware' => 'auth'], function () {
    Route::get('/', 'VesselController@index')->name('vessels');

});

Route::group(['prefix' => 'bls', 'middleware' => 'auth'], function () {
    Route::get('/bls', 'BlController@index')->name('bls');

});
