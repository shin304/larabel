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

Route::get('/hello', 'PostController@sayHello');

Route::get('/message', 'PostController@message');

Route::get('/table', 'PostController@table');

Route::get('/translate', 'PostController@index');

Route::get('/form','PostController@form');
Route::post('/form','PostController@form');
