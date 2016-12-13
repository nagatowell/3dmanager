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
//Usuários
	Route::get('/registrar', 'HomeController@registrar')->middleware('auth');
	Route::post('/registra', 'Auth\AuthController@create')->middleware('auth');
	Route::get('/usuarios', 'UserController@listar')->middleware('auth');
	Route::get('/usuarios/remover{id}', 'UserController@remover')->where ('id', '[0-9]+')->middleware('auth');
	Route::post('/usuarios/alterar/{id}', 'UserController@alterar')->where ('id', '[0-9]+')->middleware('auth');
	Route::get('/usuarios/atualizar/{id}', 'UserController@atualizar')->where ('id', '[0-9]+')->middleware('auth');
//Cores
	Route::get('/cores', 'CorController@listar');
	Route::get('/cores/novo', 'CorController@novo')->middleware('auth');
	Route::post('/cores/novo', 'CorController@novo')->middleware('auth');
	Route::post('/cores/adicionar', 'CorController@adicionar')->middleware('auth');
	Route::post('/cor/alterar/{id}', 'CorController@alterar')->where ('id', '[0-9]+')->middleware('auth');
	Route::get('/cor/atualizar/{id}', 'CorController@atualizar')->where ('id', '[0-9]+')->middleware('auth');
	Route::get('/cor/mostra/{id}', 'CorController@detalhes')->where ('id', '[0-9]+')->middleware('auth');
	Route::get('/cor/remove/{id}', 'CorController@remove')->where ('id', '[0-9]+')->middleware('auth');

//Filamento
	Route::get('/filamentos', 'FilamentoController@listar');
	Route::get('/filamentos/novo', 'FilamentoController@novo')->middleware('auth');
	Route::post('/filamentos/novo', 'FilamentoController@novo')->middleware('auth');
	Route::post('/filamentos/adicionar', 'FilamentoController@adicionar')->middleware('auth');
	Route::post('/filamento/alterar/{id}', 'FilamentoController@alterar')->where ('id', '[0-9]+')->middleware('auth');
	Route::get('/filamento/atualizar/{id}', 'FilamentoController@atualizar')->where ('id', '[0-9]+')->middleware('auth');
	Route::get('/filamento/mostra/{id}', 'FilamentoController@detalhes')->where ('id', '[0-9]+')->middleware('auth');
	Route::get('/filamento/remove/{id}', 'FilamentoController@remove')->where ('id', '[0-9]+')->middleware('auth');

//Materiais
	Route::get('/materiais', 'MaterialController@listar');
	Route::get('/materiais/novo', 'MaterialController@novo')->middleware('auth');
	Route::post('/materiais/novo', 'MaterialController@novo')->middleware('auth');
	Route::post('/materiais/adicionar', 'MaterialController@adicionar')->middleware('auth');
	Route::post('/material/alterar/{id}', 'MaterialController@alterar')->where ('id', '[0-9]+')->middleware('auth');
	Route::get('/material/atualizar/{id}', 'MaterialController@atualizar')->where ('id', '[0-9]+')->middleware('auth');
	Route::get('/material/mostra/{id}', 'MaterialController@detalhes')->where ('id', '[0-9]+')->middleware('auth');
	Route::get('/material/remove/{id}', 'MaterialController@remove')->where ('id', '[0-9]+')->middleware('auth');

//Fornecedores
	Route::get('/fornecedores', 'FornecedorController@listar');
	Route::get('/fornecedores/novo', 'FornecedorController@novo')->middleware('auth');
	Route::post('/fornecedores/novo', 'FornecedorController@novo')->middleware('auth');
	Route::post('/fornecedores/adicionar', 'FornecedorController@adicionar')->middleware('auth');
	Route::post('/fornecedor/alterar/{id}', 'FornecedorController@alterar')->where ('id', '[0-9]+')->middleware('auth');
	Route::get('/fornecedor/atualizar/{id}', 'FornecedorController@atualizar')->where ('id', '[0-9]+')->middleware('auth');
	Route::get('/fornecedor/mostra/{id}', 'FornecedorController@detalhes')->where ('id', '[0-9]+')->middleware('auth');
	Route::get('/fornecedor/remove/{id}', 'FornecedorController@remove')->where ('id', '[0-9]+')->middleware('auth');

//Status
	Route::get('/status', 'StatusImpController@listar');
	Route::get('/status/novo', 'StatusImpController@novo')->middleware('auth');
	Route::post('/status/novo', 'StatusImpController@novo')->middleware('auth');
	Route::post('/status/adicionar', 'StatusImpController@adicionar')->middleware('auth');
	Route::post('/status/alterar/{id}', 'StatusImpController@alterar')->where ('id', '[0-9]+')->middleware('auth');
	Route::get('/status/atualizar/{id}', 'StatusImpController@atualizar')->where ('id', '[0-9]+')->middleware('auth');
	Route::get('/status/mostra/{id}', 'StatusImpController@detalhes')->where ('id', '[0-9]+')->middleware('auth');
	Route::get('/status/remove/{id}', 'StatusImpController@remove')->where ('id', '[0-9]+')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index');
