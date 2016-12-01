<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','GeneralController@index');
Route::post('/get_comunas','GeneralController@get_comunas');
Route::post('/get_clinicas','GeneralController@get_clinicas');
Route::post('/get_especialidades','GeneralController@get_especialidades');

