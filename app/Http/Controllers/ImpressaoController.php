<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Impressao;
use App\StatusImpressao;
use App\Peca;
use App\Pedidos;
use App\Filamento;
use Auth;
class ImpressaoController extends Controller
{
    public function listar(){
	    $impressao = Impressao::where('user_id', '=', Auth::id())
	    ->simplePaginate(5);
	    //return $impressao;
	    return view('impressao/listar',['impressao'=>$impressao]);
    }
    public function listarId($id){
	    $impressao = Impressao::where('impressoes_id', '=', $id)->where('user_id', '=', Auth::id())->simplePaginate(5);
	    return view('impressao/listar',['impressao'=>$impressao]);

    }
    public function novo(){
    	$status = StatusImpressao::all();
    	$pecas = Peca::all();
    	$pedido = Pedidos::all();
    	$filamentos = Filamento::all();
		return view('impressao.formularioCadastra', ['status'=> $status, 'pecas'=> $pecas, 'pedidos'=> $pedido, 'filamentos'=> $filamentos]);
	}

	public function adicionar(Request $request){
		//return $request;
			$impressao = new Impressao;
			$impressao->camada_impressao = $_POST['camada_impressao'];
			$impressao->infill = $_POST['infill'];
			$impressao->suporte = $_POST['suporte'];
			$impressao->tempo_impressao = $_POST['tempo_impressao'];
			$impressao->peso_impressao = $_POST['peso_impressao'];
			$impressao->peca_id = $_POST['peca_id'];
			$impressao->status_imp_id = $_POST['status_imp_id'];
			$impressao->filamento_id = $_POST['filamento_id'];
			$impressao->observacoes = $_POST['observacoes'];
			$impressao->pedido_id = $_POST['pedido_id'];
			$impressao->quant_impressao = $_POST['quant_impressao'];
			$impressao->user_id = Auth::id();
			$impressao->save();			
	
		return redirect()->action('impressaoController@listar');
	}
	public function alterar($id, Request $request){
		$novosDados = $request->all();
		$impressao = Impressao::where('impressoes_id', '=', $id)->where('user_id', '=', Auth::id())->first();
		$impressao->update($novosDados);
		$impressao->save();
		return redirect()->action('impressaoController@listar')->withInput($request->only('nome'));
	}
	public function atualizar($id){
		$impressao = Impressao::find($id);
		return view('impressao.formularioAtualiza')->with('i', $impressao);	
	}
	public function detalhes($id){
		$impressao = Impressao::where('impressoes_id', '=', $id)->where('user_id', '=', Auth::id());
		return view('impressao.detalhes')->with('i', $impressao);	
	}
	public function remove($id){
		$impressao = Impressao::where('impressoes_id', '=', $id)->where('user_id', '=', Auth::id());
		$impressao->delete();
		return redirect()->action('ImpressaoController@listar');
	}
}
