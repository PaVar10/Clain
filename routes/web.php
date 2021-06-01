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

Route::post('/usuario/store','UserController@store');

Route::get('/usuario/export','UserController@export')->name('users.export');

//interacciones



Route::get('interaccion/{id}/carga','InteractionController@carga')->name('listado.carga');

Route::post('interaccion/import/{id}','InteractionController@importExcel')->name('interaccion.import');

Route::get('interaccion/showlist/{id}','InteractionController@showlist')->name('interaccion.showlist');

Route::get('listado/export','InteractionController@export')->name('listado.export');

Route::post('listado/import','InteractionController@importExcel')->name('listado.import');

Route::get('/listado/{li}', 'InteractionController@listar')->name('list');

Route::get('/listado', 'InteractionController@listar')->name('list');


Route::get('/listado/{li}/editar','InteractionController@edit')->name('listado.edit');

Route::put('/listado/{li}/actualizar', 'InteractionController@update');


//login


Route::get('/showlog','Auth\LoginController@showLoginForm')->name('showlog'); // mostrar login

Route::POST('/login','Auth\LoginController@login')->name('login');

Route::post('logout','Auth\LoginController@logout')->name('logout');

Route::get('dashboard', 'DashboardController@index')->name('dashboard');

// conversaciones

Route::get('/conversacion/nuevo','conversationController@create')->name('conversation.create');

//Route::post('/conversacion/store','conversationController@store')->name('conversation.store');

Route::post('/conversacion/store/{id}','conversationController@store')->name('conversation.store');

//Route::get('/conversacion/showlist','conversationController@showlist')->name('conversation.showlist');

Route::get('/conversacion/showlist/{id}','conversationController@showlist')->name('conversation.showlist');
