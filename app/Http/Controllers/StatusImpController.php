<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StatusImpressao;
use Auth;
class StatusImpController extends Controller
{
    public function listar(){
	    $status = StatusImpressao::where('user_id', '=', Auth::id())->orWhere('user_id', '1')
	    ->simplePaginate(5);
	    return view('status/listar',['status'=>$status]);

    }
    public function novo(){
		return view('status.formularioCadastra');
	}

	public function adicionar(Request $request){
			$status = new StatusImpressao;
			$status->nome_status = $_POST['nome_status'];
			$status->descricao_status = $_POST['descricao_status'];
			$status->user_id = Auth::id();
			$status->save();
	
		return redirect()->action('StatusImpController@listar');
	}
	public function alterar($id, Request $request){
		$novosDados = $request->all();
		$status = StatusImpressao::where('status_imp_id', '=', $id)->where('user_id', '=', Auth::id())->first();
		$status->update($novosDados);
		$status->save();
		return redirect()->action('StatusImpController@listar')->withInput($request->only('nome'));
	}
	public function atualizar($id){
		$status = StatusImpressao::find($id);
		return view('status.formularioAtualiza')->with('s', $status);	
	}
	public function detalhes($id){
		$status = StatusImpressao::where('status_imp_id', '=', $id)->where('user_id', '=', Auth::id());
		return view('status.detalhes')->with('b', $status);	
	}
	public function remove($id){
		$status = StatusImpressao::where('status_imp_id', '=', $id)->where('user_id', '=', Auth::id());
		$status->delete();
		return redirect()->action('StatusImpController@listar');
	}
}
