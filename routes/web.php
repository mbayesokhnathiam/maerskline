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

use Illuminate\Support\Facades\Route;

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

    Route::get('/edit/{id}', 'ShippingController@confirmEdit')->name('shipping-line-edition');
    Route::post('/edit/shipping-line/{id}', 'ShippingController@update')->name('edit-shipping-line');
    Route::get('/edit/shipping-line/{id}', 'ShippingController@index')->name('edit-shipping-line');

});

Route::group(['prefix' => 'vessels', 'middleware' => 'auth'], function () {
    Route::get('/', 'VesselController@index')->name('vessels');

});

Route::group(['prefix' => 'bls', 'middleware' => 'auth'], function () {
    Route::get('/details/{id}', 'BlController@detail')->name('bl-detail');
    Route::get('/{startDate?}/{endDate?}', 'BlController@index')->name('bls');
});

Route::group(['prefix' => 'gainde', 'middleware' => 'auth'], function () {
	Route::get('/', 'DataController@index');
	Route::post('/', 'DataController@import');
});

Route::group(['prefix' => 'users', 'middleware' => 'auth'], function () {
	Route::get('/', 'UserController@index');
	Route::post('/', 'UserController@store');
	Route::get('/{id}/profile', 'UserController@show');
});

Route::group(['prefix' => 'export', 'middleware' => 'auth'], function() {
    Route::get('/excel', 'ExportController@exportUsers');
    Route::get('/bls/excel/{startDate?}/{endDate?}', 'ExportController@exportBls');
});

Route::group(['prefix' => 'ports', 'middleware' => 'auth'], function () {
    Route::get('/', 'PortCodeController@index');
    Route::post('/', 'PortCodeController@search');
});
