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
Route::group(['middleware'=>'cors'], function(){
    Route::post('user', 'ProfileController@create');
    Route::get('user', 'ProfileController@list');
    Route::put('user/{id}', 'ProfileController@update');
    Route::get('user/{id}', 'ProfileController@get');
    Route::delete('user/{id}', 'ProfileController@delete');

});
