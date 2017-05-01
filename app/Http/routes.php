<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


use App\Atividade;

/*-----------------------------------------------------------
Área de teste
-----------------------------------------------------------*/




/*-----------------------------------------------------------
Área de usuário
-----------------------------------------------------------*/

Route::get('/fim', ['middleware' => 'end', 'as' => 'site.fim', 'uses' => 'PontuacaoController@fim']);

Route::get('/', 'SiteController@index');
Route::get('/atividades', ['as' => 'siteAtividades', 'uses' => 'SiteController@atividades']);
Route::get('/atividades/{id}', ['as' => 'siteAtividadesId', 'uses' => 'SiteController@atividadesDetalhe']);
Route::get('/equipes', ['as' => 'siteEquipes', 'uses' => 'SiteController@equipes']);
Route::get('/sobre', ['as' => 'siteSobre', 'uses' => 'SiteController@sobre']);
Route::get('/placar', ['as' => 'site.placar', 'uses' => 'PontuacaoController@index']);
Route::get('placar/equipes', ['uses' => 'PontuacaoController@porEquipe', 'as' => 'site.pontuacoes.equipes']);
Route::get('placar/equipes/{id}', ['uses' => 'PontuacaoController@porEquipeId', 'as' => 'site.pontuacoes.equipes.id']);

Route::get('/memorial', [function () {
    return view('site.memorial');
}]);

Route::get('/coordenacao', [function () {
    return view('site.coordenacao');
}]);


/*-----------------------------------------------------------
Área de login
-----------------------------------------------------------*/

Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');

Route::get('logout', 'Auth\AuthController@getLogout');

Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', 'Auth\AuthController@postRegister');

Route::get('logout', 'Auth\AuthController@logout');


/*-----------------------------------------------------------
Área administrativa
-----------------------------------------------------------*/


Route::group(['prefix' => 'admspf', 'middleware' => 'auth'], function () {

    Route::get('/', ['as' => 'index.adm',function () {
        return view('adm.index');
    }]);

    /*-----------------------------------------------------------
    Formulários de cadastro
    -----------------------------------------------------------*/

    Route::get('/atividades/novo', ['uses' => 'AtividadeController@create', 'as' => 'atividades.create']);
    Route::get('/posicoes/novo', ['uses' => 'PosicaoController@create', 'as' => 'posicoes.create']);
    Route::get('/equipes/novo', ['uses' => 'EquipeController@create', 'as' => 'equipes.create']);
    Route::get('/salas/novo', ['uses' => 'SalaController@create', 'as' => 'salas.create']);
    Route::get('/classificacoes/novo', ['uses' => 'ClassificacaoController@create', 'as' => 'classificacoes.create']);

    /*-----------------------------------------------------------
    Rotas de envio de dados para cadastro
    -----------------------------------------------------------*/

    Route::post('atividades', ['uses' => 'AtividadeController@store', 'as' => 'atividades.store']);
    Route::post('equipes', ['uses' => 'EquipeController@store', 'as' => 'equipes.store']);
    Route::post('salas', ['as' => 'storeSala', 'uses' => 'SalaController@store', 'as' => 'salas.store']);
    Route::post('posicoes', ['uses' => 'PosicaoController@store', 'as' => 'posicoes.store']);
    Route::post('classificacoes', ['uses' => 'ClassificacaoController@store', 'as' => 'classificacoes.store']);

    /*-----------------------------------------------------------
    Rotas de apresentação de coleções
    -----------------------------------------------------------*/

    Route::get('equipes', ['uses' => 'EquipeController@index', 'as' => 'equipes.show']);
    Route::get('atividades', ['uses' => 'AtividadeController@index', 'as' => 'atividades.show']);
    Route::get('pontuacoes', ['uses' => 'PontuacaoController@index', 'as' => 'pontuacoes.show']);
    Route::get('pontuacoes/equipes', ['uses' => 'PontuacaoController@porEquipe', 'as' => 'pontuacoes.equipes']);
    Route::get('pontuacoes/equipes/{id}', ['uses' => 'PontuacaoController@porEquipeId', 'as' => 'pontuacoes.equipes.id']);
    Route::get('/fim', ['as' => 'adm.fim', 'uses' => 'PontuacaoController@fim']);

    /*-----------------------------------------------------------
    Rotas de exclusão de itens
    -----------------------------------------------------------*/

    Route::delete('equipes/{id}', ['as' => 'equipes.destroy', 'uses' => 'EquipeController@destroy']);
    Route::delete('atividades/{id}', ['as' => 'atividades.destroy', 'uses' => 'AtividadeController@destroy']);

    /*-----------------------------------------------------------
    Rotas de encerramento da feira
    -----------------------------------------------------------*/

    Route::get('encerra',['as' => 'adm.encerra', function () {
        touch(storage_path() . '/spfend/end');
        flash()->info('Feira encerrada');
        return redirect()->route('index.adm');
    }]);

    Route::get('restaura', ['as' => 'adm.restaura',function()
    {
        @unlink(storage_path().'/spfend/end');
        flash()->info('Feira restaurada');
        return redirect()->route('index.adm');
    }]);

});


