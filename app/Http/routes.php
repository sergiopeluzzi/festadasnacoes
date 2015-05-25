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

/**
 * Rotas Básicas do Laravel
 */
Route::get('admin', 'HomeController@index');
Route::get('home', 'HomeController@index');

/**
 * Rotas do Site Front-End
 */
Route::get('/', 'SiteController@index');
Route::get('minhaconta', 'SiteController@minhaconta');
Route::get('meucarrinho', 'SiteController@meucarrinho');
Route::get('finalizar', 'SiteController@finalizar');


/**
 * Rotas do admin Back-End
 */
Route::resource('admin/clientes', 'ClientesController');
Route::resource('admin/funcionarios', 'FuncionariosController');
Route::resource('admin/eventos', 'EventosController');
Route::resource('admin/nacoes', 'NacoesController');
Route::resource('admin/cardapios', 'CardapiosController');
Route::resource('admin/pratos', 'PratosController');
Route::resource('admin/unidades', 'UnidadesController');
Route::resource('admin/produtos', 'ProdutosController');

Route::group(['namespace' => 'Admin'], function()
{
    Route::group(['prefix' => 'admin'], function()
    {
        Route::resource('vendas', 'PedidosController');
        Route::resource('bebidas', 'BebidasController');
        Route::get('vendas/baixar/{id}', 'PedidosController@baixar');
        Route::get('vendas/busca', 'PedidosController@busca');
        Route::get('producao', 'ProducaoController@index');
    });
});


/**
 * RouteGroup do Carrinho
 */
Route::group(['prefix' => 'meucarrinho'], function()
{
    Route::get('add/{id}', 'CarrinhoController@add');
    Route::get('/', 'CarrinhoController@index');
    Route::get('remover/{id}', 'CarrinhoController@remover');
    Route::get('add2/{id}', 'CarrinhoController@add2');
    Route::get('diminuir/{id}', 'CarrinhoController@diminuir');
});


/**
 * Rotas do Site
 */
Route::group(['namespace' => 'Site'], function()
{
    Route::get('contato', 'ContatosController@indexC');

    Route::group(['prefix' => 'meuspedidos'], function()
    {
        Route::get('/', 'PedidosController@index');
    });

    Route::group(['prefix' => 'cadastrar'], function()
    {
        Route::get('/', ['as' => 'site.cadastrar', 'uses' => 'ClientesController@index']);
        Route::post('/cadastrar', ['as' => 'site.cadastrar.cadastrar', 'uses' => 'ClientesController@store']);
        Route::get('/sucesso', 'ClientesController@sucesso' );
    });

    Route::group(['prefix' => 'finalizar'], function()
    {
        Route::get('/', ['as' => 'site.finalizar', 'uses' => 'FinalizarController@index']);
        Route::post('/fechar', ['as' => 'site.finalizar.fechar', 'uses' => 'FinalizarController@fechar']);
        Route::get('/sucesso', 'FinalizarController@sucesso' );
    });

    Route::group(['prefix' => 'cardapio'], function()
    {
        Route::get('{id}', 'CardapiosController@prato');
    });
});

Route::get('remover/{id}', 'CarrinhoController@remover2');

/**
 * Rotas de autenticação
 */
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
