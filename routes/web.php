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



Auth::routes();

Route::group(['prefix' => 'administrator', 'middleware' => 'auth'], function () {

    Route::get('/', 'Adm\IndexController@index')->name('adm-index');
    Route::get('/classificacoes/create', 'Adm\ClassificacaoController@create')->name('adm-classificacao-create');
    Route::post('/classificacoes', 'Adm\ClassificacaoController@store')->name('adm-classificacao-store');
    
    Route::post('/classificacoes/ajax', 'Adm\ClassificacaoController@storeAjax')->name('adm-classificacao-store-ajax');

    Route::get('/query/atividades', 'Adm\ClassificacaoController@queryByAtividades')->name('adm-atividades');
    Route::get('/query/equipes', 'Adm\ClassificacaoController@queryByEquipes')->name('adm-equipes');
    Route::get('/pontuacao/geral', 'Adm\PontuacaoController@index')->name('adm-pontuacao-index');
    Route::get('/pontuacao/total', 'Adm\PontuacaoController@total')->name('adm-pontuacao-total');


});

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'IndexController@index')->name('index');
Route::get('/equipes', 'EquipeController@index')->name('equipes');

Route::get('/palavras', 'IndexController@palavras')->name('palavras');
Route::get('/sobre', 'IndexController@sobre')->name('sobre');


Route::get('/atividades', 'IndexController@queryByAtividades')->name('');
//Route::get('/equipes/{equipe}', 'IndexController@queryByEquipes')->name('site-equipes');

Route::get('/placar', 'PontuacaoController@index')->name('site-atividades');
Route::get('/fim', 'PontuacaoController@total')->name('site-fim');
Route::get('/equipes', 'PontuacaoController@porEquipe')->name('equipes');
Route::get('/equipes/{id}', 'PontuacaoController@porEquipeId')->name('equipes-id');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
