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

Route::get('/', 'PhotoController@index');
Route::get('/gallery/{cat}', 'PhotoController@gallery');
Route::get('/add', 'PhotoController@add');
Route::post('/store', 'PhotoController@store');
Route::delete('/{dir}/{file}', 'PhotoController@destroy');
Route::get('/navbar', 'PhotoController@navbar');
