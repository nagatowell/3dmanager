<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fornecedor;
use Auth;
class FornecedorController extends Controller
{
    public function listar(){
	    $fornecedores = Fornecedor::where('user_id', '=', Auth::id())->simplePaginate(5);
	    return view('fornecedor/listar',['fornecedores'=>$fornecedores]);

    }
    public function novo(){
		return view('fornecedor.formularioCadastra');
	}

	public function adicionar(Request $request){
			$fornecedores = new Fornecedor;
			$fornecedores->nome_fornecedor = $request->input('nome_fornecedor');
			$fornecedores->site_fornecedor = $request->input('site_fornecedor');
			$fornecedores->user_id = Auth::id();
			$fornecedores->save();
		return redirect()->action('FornecedorController@listar');
	}
	public function alterar($id, Request $request){
		$novosDados = $request->all();
		$fornecedores = Fornecedor::where('fornecedor_id', '=', $id)->where('user_id', '=', Auth::id())->first();
		$fornecedores->update($novosDados);
		$fornecedores->save();
		return redirect()->action('FornecedorController@listar');
	}
	public function atualizar($id){
		$fornecedores = Fornecedor::find($id);
		return view('fornecedor.formularioAtualiza')->with('s', $fornecedores);	
	}
	public function detalhes($id){
		$fornecedores = Fornecedor::where('fornecedor_id', '=', $id)->where('user_id', '=', Auth::id());
		return view('fornecedor.detalhes')->with('b', $fornecedores);	
	}
	public function remove($id){
		$fornecedores = Fornecedor::where('fornecedor_id', '=', $id)->where('user_id', '=', Auth::id());
		$fornecedores->delete();
		return redirect()->action('FornecedorController@listar');
	}
}
