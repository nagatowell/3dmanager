<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cores;
use Auth;
class CorController extends Controller
{
    public function listar(){
	    $cores = Cores::where('user_id', '=', Auth::id())->simplePaginate(5);
	    return view('cores/listar',['cores'=>$cores]);

    }
    public function novo(){
		return view('cores.formularioCadastra');
	}

	public function adicionar(Request $request){
			$cores = new Cores;
			$cores->nome_cor = $_POST['nome_cor'];
			$cores->user_id = Auth::id();
			$cores->save();
	
		return redirect()->action('CorController@listar');
	}
	public function alterar($id, Request $request){
		$novosDados = $request->all();
		$cores = Cores::where('cores_id', '=', $id)->where('user_id', '=', Auth::id())->first();
		$cores->update($novosDados);
		$cores->save();
		return redirect()->action('CorController@listar')->withInput($request->only('nome'));
	}
	public function atualizar($id){
		$cores = Cores::find($id);
		return view('Cores.formularioAtualiza')->with('s', $cores);	
	}
	public function detalhes($id){
		$cores = Cores::where('cores_id', '=', $id)->where('user_id', '=', Auth::id());
		return view('Cores.detalhes')->with('b', $cores);	
	}
	public function remove($id){
		$cores = Cores::where('cores_id', '=', $id)->where('user_id', '=', Auth::id());
		$cores->delete();
		return redirect()->action('CorController@listar');
	}
}
