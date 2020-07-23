<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// menambahkan route untuk person
Route::get('/person', 'PersonController@index');
Route::post('/person', 'PersonController@store');
Route::get('/person/{id}', 'PersonController@show');
Route::put('/person/{id}', 'PersonController@update');
Route::delete('/person/{id}', 'PersonController@destroy');
