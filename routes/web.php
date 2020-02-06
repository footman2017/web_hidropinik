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
Route::get('/', 'HomeController@viewDataPh');
Route::get('/home', 'HomeController@viewDataPh');

Route::get('/tambah', 'HomeController@formInput');
Route::get('/diagram', 'HomeController@viewDataPh');
Route::get('/diagram/getdataph', 'HomeController@requestPh');
Route::get('/diagram/getdatalastph', 'HomeController@requestLastPh');
Route::get('/diagram/get_diagram_ph', 'HomeController@get_diagram_ph');
Route::post('/tambah/insert', 'HomeController@insert');