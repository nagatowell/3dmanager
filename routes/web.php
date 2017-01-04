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
	Route::get('/cores', 'CorController@listar')->middleware('auth');;
	Route::get('/cores/novo', 'CorController@novo')->middleware('auth');
	Route::post('/cores/novo', 'CorController@novo')->middleware('auth');
	Route::post('/cores/adicionar', 'CorController@adicionar')->middleware('auth');
	Route::post('/cor/alterar/{id}', 'CorController@alterar')->where ('id', '[0-9]+')->middleware('auth');
	Route::get('/cor/atualizar/{id}', 'CorController@atualizar')->where ('id', '[0-9]+')->middleware('auth');
	Route::get('/cor/mostra/{id}', 'CorController@detalhes')->where ('id', '[0-9]+')->middleware('auth');
	Route::get('/cor/remove/{id}', 'CorController@remove')->where ('id', '[0-9]+')->middleware('auth');

//Filamento
	Route::get('/filamentos', 'FilamentoController@listar')->middleware('auth');;
	Route::get('/filamentos/novo', 'FilamentoController@novo')->middleware('auth');
	Route::post('/filamentos/novo', 'FilamentoController@novo')->middleware('auth');
	Route::post('/filamentos/adicionar', 'FilamentoController@adicionar')->middleware('auth');
	Route::post('/filamento/alterar/{id}', 'FilamentoController@alterar')->where ('id', '[0-9]+')->middleware('auth');
	Route::get('/filamento/atualizar/{id}', 'FilamentoController@atualizar')->where ('id', '[0-9]+')->middleware('auth');
	Route::get('/filamento/mostra/{id}', 'FilamentoController@detalhes')->where ('id', '[0-9]+')->middleware('auth');
	Route::get('/filamento/remove/{id}', 'FilamentoController@remove')->where ('id', '[0-9]+')->middleware('auth');

//Materiais
	Route::get('/materiais', 'MaterialController@listar')->middleware('auth');;
	Route::get('/materiais/novo', 'MaterialController@novo')->middleware('auth');
	Route::post('/materiais/novo', 'MaterialController@novo')->middleware('auth');
	Route::post('/materiais/adicionar', 'MaterialController@adicionar')->middleware('auth');
	Route::post('/material/alterar/{id}', 'MaterialController@alterar')->where ('id', '[0-9]+')->middleware('auth');
	Route::get('/material/atualizar/{id}', 'MaterialController@atualizar')->where ('id', '[0-9]+')->middleware('auth');
	Route::get('/material/mostra/{id}', 'MaterialController@detalhes')->where ('id', '[0-9]+')->middleware('auth');
	Route::get('/material/remove/{id}', 'MaterialController@remove')->where ('id', '[0-9]+')->middleware('auth');

//Fornecedores
	Route::get('/fornecedores', 'FornecedorController@listar')->middleware('auth');;
	Route::get('/fornecedores/novo', 'FornecedorController@novo')->middleware('auth');
	Route::post('/fornecedores/novo', 'FornecedorController@novo')->middleware('auth');
	Route::post('/fornecedores/adicionar', 'FornecedorController@adicionar')->middleware('auth');
	Route::post('/fornecedor/alterar/{id}', 'FornecedorController@alterar')->where ('id', '[0-9]+')->middleware('auth');
	Route::get('/fornecedor/atualizar/{id}', 'FornecedorController@atualizar')->where ('id', '[0-9]+')->middleware('auth');
	Route::get('/fornecedor/mostra/{id}', 'FornecedorController@detalhes')->where ('id', '[0-9]+')->middleware('auth');
	Route::get('/fornecedor/remove/{id}', 'FornecedorController@remove')->where ('id', '[0-9]+')->middleware('auth');

//Status
	Route::get('/status', 'StatusImpController@listar')->middleware('auth');;
	Route::get('/status/novo', 'StatusImpController@novo')->middleware('auth');
	Route::post('/status/novo', 'StatusImpController@novo')->middleware('auth');
	Route::post('/status/adicionar', 'StatusImpController@adicionar')->middleware('auth');
	Route::post('/status/alterar/{id}', 'StatusImpController@alterar')->where ('id', '[0-9]+')->middleware('auth');
	Route::get('/status/atualizar/{id}', 'StatusImpController@atualizar')->where ('id', '[0-9]+')->middleware('auth');
	Route::get('/status/mostra/{id}', 'StatusImpController@detalhes')->where ('id', '[0-9]+')->middleware('auth');
	Route::get('/status/remove/{id}', 'StatusImpController@remove')->where ('id', '[0-9]+')->middleware('auth');

//Peças
	Route::get('/pecas', 'PecaController@listar')->middleware('auth');;
	Route::get('/pecas/novo', 'PecaController@novo')->middleware('auth');
	Route::post('/pecas/novo', 'PecaController@novo')->middleware('auth');
	Route::post('/pecas/adicionar', 'PecaController@adicionar')->middleware('auth');
	Route::post('/peca/alterar/{id}', 'PecaController@alterar')->where ('id', '[0-9]+')->middleware('auth');
	Route::get('/peca/atualizar/{id}', 'PecaController@atualizar')->where ('id', '[0-9]+')->middleware('auth');
	Route::get('/peca/mostra/{id}', 'PecaController@detalhes')->where ('id', '[0-9]+')->middleware('auth');
	Route::get('/peca/remove/{id}', 'PecaController@remove')->where ('id', '[0-9]+')->middleware('auth');
//Pedidos
	Route::get('/pedidos', 'PedidoController@listar')->middleware('auth');;
	Route::get('/pedidos/listar/{id}', 'PedidoController@listarId');
	Route::get('/pedidos/novo', 'PedidoController@novo')->middleware('auth');
	Route::post('/pedidos/novo', 'PedidoController@novo')->middleware('auth');
	Route::post('/pedidos/adicionar', 'PedidoController@adicionar')->middleware('auth');
	Route::post('/pedido/alterar/{id}', 'PedidoController@alterar')->where ('id', '[0-9]+')->middleware('auth');
	Route::get('/pedido/atualizar/{id}', 'PedidoController@atualizar')->where ('id', '[0-9]+')->middleware('auth');
	Route::get('/pedido/mostra/{id}', 'PedidoController@detalhes')->where ('id', '[0-9]+')->middleware('auth');
	Route::get('/pedido/remove/{id}', 'PedidoController@remove')->where ('id', '[0-9]+')->middleware('auth');

//Venda
	Route::get('/vendas', 'VendaController@listar')->middleware('auth');;
	Route::get('/vendas/listar/{id}', 'VendaController@listarId')->middleware('auth');;
	Route::get('/venda/novo/{id}', 'VendaController@novo')->middleware('auth');
	Route::post('/vendas/adicionar', 'VendaController@adicionar')->middleware('auth');
	Route::post('/venda/alterar/{id}', 'VendaController@alterar')->where ('id', '[0-9]+')->middleware('auth');
	Route::get('/venda/atualizar/{id}', 'VendaController@atualizar')->where ('id', '[0-9]+')->middleware('auth');
	Route::get('/venda/mostra/{id}', 'VendaController@detalhes')->where ('id', '[0-9]+')->middleware('auth');
	Route::get('/venda/remove/{id}', 'VendaController@remove')->where ('id', '[0-9]+')->middleware('auth');

//Impressao
	Route::get('/impressoes', 'ImpressaoController@listar')->middleware('auth');;
	Route::get('/impressoes/listar/{id}', 'ImpressaoController@listarId');
	Route::get('/impressoes/novo', 'ImpressaoController@novo')->middleware('auth');
	Route::post('/impressoes/novo', 'ImpressaoController@novo')->middleware('auth');
	Route::post('/impressoes/adicionar', 'ImpressaoController@adicionar')->middleware('auth');
	Route::post('/impressao/alterar/{id}', 'ImpressaoController@alterar')->where ('id', '[0-9]+')->middleware('auth');
	Route::get('/impressao/atualizar/{id}', 'ImpressaoController@atualizar')->where ('id', '[0-9]+')->middleware('auth');
	Route::get('/impressao/mostra/{id}', 'ImpressaoController@detalhes')->where ('id', '[0-9]+')->middleware('auth');
	Route::get('/impressao/remove/{id}', 'ImpressaoController@remove')->where ('id', '[0-9]+')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index');
