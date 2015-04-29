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

Route::get('/', 'WelcomeController@index');
Route::get('admin', 'HomeController@index');
Route::get('home', 'HomeController@index');

Route::get('site', 'SiteController@index');

Route::resource('admin/clientes', 'ClientesController');
Route::resource('admin/funcionarios', 'FuncionariosController');
Route::resource('admin/eventos', 'EventosController');
Route::resource('admin/nacoes', 'NacoesController');
Route::resource('admin/cardapios', 'CardapiosController');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
