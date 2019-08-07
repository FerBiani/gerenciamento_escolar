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

//ROTAS DE USUÁRIO
Route::get('/', 'UsuarioController@index');
Route::get('/form', 'UsuarioController@create');
Route::post('/', 'UsuarioController@store');
Route::get('/{id}/edit', 'UsuarioController@edit');
Route::put('/{id}', 'UsuarioController@update');
Route::delete('/{id}', 'UsuarioController@destroy');
Route::put('/restore/{id}', 'UsuarioController@restore');

//ROTAS DE NÍVEL
Route::get('/nivel', 'NivelController@index');
Route::get('/nivel/form', 'NivelController@create');
Route::post('/nivel', 'NivelController@store');
Route::get('/nivel/{id}/edit', 'NivelController@edit');
Route::put('/nivel/{id}', 'NivelController@update');

//Route::get('/soma/{a}/{b}', 'UsuarioController@soma');

//GET

//POST

//PUT

//DELETE
