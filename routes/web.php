<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/processo', 'ProcessoController@index')->name('listar_processos');
Route::get('/processo/criar', 'ProcessoController@create')->name('criar_processo');
Route::post('/processo/criar', 'ProcessoController@store');
Route::delete('/processo/{id}', 'ProcessoController@destroy');