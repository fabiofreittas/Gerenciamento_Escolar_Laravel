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

Route::get('/alunos/pesquisar', 'AlunoController@pesquisar')->middleware('auth');

Route::post('/alunos/pesquisar', 'AlunoController@pesquisar')->middleware('auth');

Route::get('/alunos/inserir', 'AlunoController@mostrar_inserir')->middleware('auth');

Route::post('/alunos/inserir', 'AlunoController@inserir')->middleware('auth');

Route::get('/alunos/alterar/{id}', 'AlunoController@mostrar_alterar')->middleware('auth');

Route::post('/alunos/alterar', 'AlunoController@alterar')->middleware('auth');

Route::get('/alunos/excluir/{id}', 'AlunoController@excluir')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
