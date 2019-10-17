<?php

// use Illuminate\Http\Request;
$api = app('Dingo\Api\Routing\Router');
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

<<<<<<< HEAD
$api->version('v1', function ($api) {
    $api->post('/vessels', 'App\Http\Controllers\ApiController@store');
});
=======
Route::get('/vessels', 'Api\ApiController@vessels');
>>>>>>> parent of 537f513... Updated EndPoint Behavior
