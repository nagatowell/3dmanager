<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venda;
use App\Pedidos;
use Auth;
class VendaController extends Controller
{
    public function listar(){
	    $venda = Venda::where('user_id', '=', Auth::id())
	    ->simplePaginate(5);
	    return view('venda/listar',['vendas'=>$venda]);

    }
    public function listarId($id){
	    $venda = Venda::where('vendas_id', '=', $id)->where('user_id', '=', Auth::id())->simplePaginate(5);
	    return view('venda/listar',['vendas'=>$venda]);

    }
    public function novo($id){
		return view('venda.formularioCadastra', ['id'=>$id]);
	}

	public function adicionar(Request $request){
		//return $request;
			$venda = new Venda;
			$venda->data_postagem = $_POST['data_postagem'];
			$venda->data_venda = $_POST['data_venda'];
			$venda->pedidos_id = $_POST['pedidos_id'];
			$venda->valor_venda = $_POST['valor_venda'];
			$venda->valor_frete = $_POST['valor_frete'];
			$venda->cep_frete = $_POST['cep_frete'];
			$venda->user_id = Auth::id();
			$venda->save();		

			$pedido = Pedidos::where('pedidos_id', '=', $_POST['pedidos_id'])->where('user_id', '=', Auth::id())->first();	
			$pedido->vendas_id = $venda->vendas_id;
			$pedido->save();
	
		return redirect()->action('VendaController@listar');
	}

	public function alterar($id, Request $request){
		$novosDados = $request->all();
		$venda = Venda::where('vendas_id', '=', $id)->where('user_id', '=', Auth::id())->first();
		$venda->update($novosDados);
		$venda->save();
		return redirect()->action('VendaController@listar')->withInput($request->only('nome'));
	}
	public function atualizar($id){
		$venda = Venda::find($id);
		return view('venda.formularioAtualiza')->with('v', $venda);	
	}
	public function detalhes($id){
		$venda = Venda::where('Venda_id', '=', $id)->where('user_id', '=', Auth::id());
		return view('Venda.detalhes')->with('v', $venda);	
	}
	public function remove($id){
		$venda = Venda::where('vendas_id', '=', $id)->where('user_id', '=', Auth::id());
		$venda->delete();
		return redirect()->action('VendaController@listar');
	}
}
