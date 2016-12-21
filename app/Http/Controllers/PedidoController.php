<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pedidos;
use Auth;
class PedidoController extends Controller
{
    public function listar(){
	    $pedido = Pedidos::where('user_id', '=', Auth::id())
	    ->simplePaginate(5);
	    return view('pedidos/listar',['pedidos'=>$pedido]);

    }
    public function novo(){
		return view('pedidos.formularioCadastra');
	}

	public function adicionar(Request $request){
			$pedido = new Pedidos;
			$pedido->nome_comprador = $_POST['nome_comprador'];
			$pedido->data_pedido = $_POST['data_pedido'];
			$pedido->venda_id = $_POST['venda_id'];
			$pedido->detalhes_pedido = $_POST['detalhes_pedido'];
			$pedido->user_id = Auth::id();
			$pedido->save();
	
		return redirect()->action('PedidoController@listar');
	}
	public function alterar($id, Request $request){
		$novosDados = $request->all();
		$pedido = Pedidos::where('pedidos_id', '=', $id)->where('user_id', '=', Auth::id())->first();
		$pedido->update($novosDados);
		$pedido->save();
		return redirect()->action('PedidoController@listar')->withInput($request->only('nome'));
	}
	public function atualizar($id){
		$pedido = Pedidos::find($id);
		return view('pedidos.formularioAtualiza')->with('p', $pedido);	
	}
	public function detalhes($id){
		$pedido = Pedidos::where('pedidos_id', '=', $id)->where('user_id', '=', Auth::id());
		return view('pedidos.detalhes')->with('p', $pedido);	
	}
	public function remove($id){
		$pedido = Pedidos::where('pedidos_id', '=', $id)->where('user_id', '=', Auth::id());
		$pedido->delete();
		return redirect()->action('PedidoController@listar');
	}
}
