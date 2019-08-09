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
Route::get('/demo', function () {
    return view('demo');
});
Route::get('/index', function () {
    return view('index');
});

Route::get('/listado', 'InteractionController@listar')->name('list');

Route::get('/usuario','UserController@index')->name('users');

Route::get('/usuario/nuevo','UserController@create')->name('users.create');

Route::post('/usuario','UserController@store');