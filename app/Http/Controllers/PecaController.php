<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Peca;
class PecaController extends Controller
{
    public function listar(){
	    $peca = Peca::where('user_id', '=', Auth::id())
	    ->simplePaginate(5);
	    return view('peca/listar',['pecas'=>$peca]);

    }
    public function novo(){
		return view('peca.formularioCadastra');
	}

	public function adicionar(Request $request){
			$peca = new Peca;
			$peca->nome_peca = $_POST['nome_peca'];
			$peca->link_thing = $_POST['link_thing'];
			$peca->quant_peca = $_POST['quant_peca'];
			$peca->user_id = Auth::id();
			$peca->save();
	
		return redirect()->action('PecaController@listar');
	}
	public function alterar($id, Request $request){
		$novosDados = $request->all();
		$peca = Peca::where('pecas_id', '=', $id)->where('user_id', '=', Auth::id())->first();
		$peca->update($novosDados);
		$peca->save();
		return redirect()->action('PecaController@listar')->withInput($request->only('nome'));
	}
	public function atualizar($id){
		$peca = Peca::find($id);
		return view('peca.formularioAtualiza')->with('p', $peca);	
	}
	public function detalhes($id){
		$peca = Peca::where('pecas_id', '=', $id)->where('user_id', '=', Auth::id());
		return view('peca.detalhes')->with('p', $peca);	
	}
	public function remove($id){
		$peca = Peca::where('pecas_id', '=', $id)->where('user_id', '=', Auth::id());
		$peca->delete();
		return redirect()->action('PecaController@listar');
	}
}
