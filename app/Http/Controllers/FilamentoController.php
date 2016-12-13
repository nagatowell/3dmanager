<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Filamento;
use App\Cores;
use App\Material;
use App\Fornecedor;
use Auth;

class FilamentoController extends Controller
{
    public function listar(){
	    $filamentos = Filamento::where('user_id', '=', Auth::id())
	    ->with('cores')->with('material')->with('fornecedor')->simplePaginate(5);
	    return view('filamentos/listar',['filamentos'=>$filamentos]);

    }
    public function novo(){
    	$cores = Cores::all();
		$material = Material::all();
		$fornecedor = Fornecedor::all();
		return view('filamentos.formularioCadastra',  ['cores'=>$cores, 'material'=>$material, 'fornecedores'=>$fornecedor]	);
	}

	public function adicionar(Request $request){
			$filamentos = new Filamento;
			$filamentos->cores_id = $request->input('cores_id');
			$filamentos->materiais_id = $request->input('materiais_id');
			$filamentos->valor = $request->input('valor');
			$filamentos->fornecedores_id = $request->input('fornecedores_id');
			$filamentos->peso = $request->input('peso');
			$filamentos->user_id = Auth::id();
			$filamentos->save();
			
			
		return redirect()->action('FilamentoController@listar');
	}
	public function alterar($id, Request $request){
		$novosDados = $request->all();
		$filamentos = Filamento::where('filamentos_id', '=', $id)->where('user_id', '=', Auth::id())->first();
		$filamentos->update($novosDados);
		$filamentos->save();
		return redirect()->action('FilamentoController@listar');
	}
	public function atualizar($id){
		$filamentos = Filamento::find($id)->with('cores')->with('material')->with('fornecedor')->first();
		$cores = Cores::all();
		$material = Material::all();
		$fornecedor = Fornecedor::all();
		return view('filamentos.formularioAtualiza', ['s'=>$filamentos,'cores'=>$cores, 'material'=>$material, 'fornecedores'=>$fornecedor]	);	
	}
	public function detalhes($id){
		$filamentos = Filamento::where('filamentos_id', '=', $id)->where('user_id', '=', Auth::id());
		return view('filamentos.detalhes')->with('b', $filamentos);	
	}
	public function remove($id){
		$filamentos = Filamento::where('filamentos_id', '=', $id)->where('user_id', '=', Auth::id());
		$filamentos->delete();
		return redirect()->action('FilamentoController@listar');
	}
}
