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

Route::get('/alunos/pesquisar', 'AlunoController@pesquisar');

Route::post('/alunos/pesquisar', 'AlunoController@pesquisar');

Route::get('/alunos/inserir', 'AlunoController@mostrar_inserir');

Route::post('/alunos/inserir', 'AlunoController@inserir');

Route::get('/alunos/alterar/{id}', 'AlunoController@mostrar_alterar');

Route::post('/alunos/alterar', 'AlunoController@alterar');

Route::get('/alunos/excluir/{id}', 'AlunoController@excluir');