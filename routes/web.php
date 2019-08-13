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
    return view('index');
});

// usuarios

Route::get('/usuario','UserController@index')->name('users');

Route::get('/usuario/nuevo','UserController@create')->name('users.create');

Route::post('/usuario','UserController@store');

Route::get('/listado', 'InteractionController@listar')->name('list');

//login


Route::get('/showlog','Auth\LoginController@showLoginForm')->name('showlog'); // mostrar login

Route::POST('/login','Auth\LoginController@login')->name('login');

Route::post('logout','Auth\LoginController@logout')->name('logout');

Route::get('dashboard', 'DashboardController@index')->name('dashboard');
