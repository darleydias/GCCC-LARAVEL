<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/processos', 'ProcessoController@index')->name('listar_processos');
Route::get('/create', 'ProcessoController@create')->name('criar_novo');
Route::post('/create', 'ProcessoController@store');
Route::delete('/remover/{id}', 'ProcessoController@destroy');
Route::post('/processo/{id}/editaNome', 'ProcessoController@editaNome');
Route::get('/processos/{proId}/tarefas','TarefasController@index');

Route::get('/tipoTarefa', 'TipoTarefaController@index')->name('listar_tipo_tarefas');
Route::get('/tipoTarefa/create', 'TipoTarefaController@create')->name('criar_tarefa');
Route::post('/tipoTarefa/create', 'TipoTarefaController@store');
Route::delete('/tipoTarefa/remover/{id}', 'TipoTarefaController@destroy');
