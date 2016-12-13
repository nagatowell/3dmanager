<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Material;
use Auth;

class MaterialController extends Controller
{
    public function listar(){
	    $materiais = Material::where('user_id', '=', Auth::id())->simplePaginate(5);
	    return view('materiais/listar',['materiais'=>$materiais]);

    }
    public function novo(){
		return view('materiais.formularioCadastra');
	}

	public function adicionar(Request $request){
			$materiais = new Material;
			$materiais->nome_material = $request->input('nome_material');
			$materiais->temp_mesa = $request->input('temp_mesa');
			$materiais->temp_bico = $request->input('temp_bico');
			$materiais->user_id = Auth::id();
			$materiais->save();
		return redirect()->action('MaterialController@listar');
	}
	public function alterar($id, Request $request){
		$novosDados = $request->all();
		$materiais = Material::where('materiais_id', '=', $id)->where('user_id', '=', Auth::id())->first();
		$materiais->update($novosDados);
		$materiais->save();
		return redirect()->action('MaterialController@listar');
	}
	public function atualizar($id){
		$materiais = Material::find($id)->with('cores')->with('material')->with('fornecedor');
		return view('materiais.formularioAtualiza')->with('s', $materiais);	
	}
	public function detalhes($id){
		$materiais = Material::where('materiais_id', '=', $id)->where('user_id', '=', Auth::id());
		return view('materiais.detalhes')->with('b', $materiais);	
	}
	public function remove($id){
		$materiais = Material::where('materiais_id', '=', $id)->where('user_id', '=', Auth::id());
		$materiais->delete();
		return redirect()->action('MaterialController@listar');
	}
}
