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

Route::get('/', 'UsersController@index');
Route::post('/movie', 'UsersController@movie');
Route::get('/movie', 'UsersController@moview');

Route::get('/apply', 'MovieController@apply');
Route::post('/apply', 'ApplyController@apply');
Route::get('id/{id?}/{title?}', 'ContainController@contain');
Route::post('/addd', 'ContainController@addd');

Route::get('user/history', 'MovieController@history');


Route::get('/history/{user_id}', 'historyController@moview');


/* testコード */

Route::get('test', 'TestController@index');
Route::post('test5', 'TestController@inde');