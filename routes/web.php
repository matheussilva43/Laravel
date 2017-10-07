<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', "PessoasController@inicio");
Route::get('/novo-usuario', "PessoasController@novoUsuario");
Route::get('/listar_pessoas', "PessoasController@listar");
Route::post('/save', "PessoasController@save");
Route::get('/atualizar/{id}', "PessoasController@atualizar");
Route::get('/delete/{id}', "PessoasController@delete");
