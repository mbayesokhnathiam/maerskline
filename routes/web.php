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

    Route::post('/create', 'ShippingController@store')->name('add-shipping-line');
    Route::get('/create', 'ShippingController@index')->name('shipping-lines');

    Route::get('/remove/{id}', 'ShippingController@confirm')->name('shipping-line-deletion');
    Route::get('/remove/shipping-line/{id}', 'ShippingController@destroy')->name('delete-shipping-line');

});

Route::group(['prefix' => 'vessels', 'middleware' => 'auth'], function () {
    Route::get('/', 'VesselController@index')->name('vessels');

});

Route::group(['prefix' => 'bls', 'middleware' => 'auth'], function () {
    Route::get('/', 'BlController@index')->name('bls');

});

Route::get('/gainde', 'DataController@index');
Route::post('/gainde', 'DataController@import');

Route::get('users', 'UserController@index');
Route::post('users', 'UserController@store');
Route::get('users/{id}/profile', 'UserController@show');
