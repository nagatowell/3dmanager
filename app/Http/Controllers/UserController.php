<?php
namespace App\Http\Controllers;

use App\User;
use App\Http\Requests;
use Auth;
use Request;
class UserController extends Controller
{
    public function listar(){
    	if (Auth::user()->acesso == 1){
	    	$usuarios = User::all();
	    	$gerentes = User::all();
	    	return view('user/listar',['usuarios'=>$usuarios, 'gerentes'=>$gerentes]);
	    }else if(Auth::user()->acesso == 2){
	    	$usuarios = User::where('users.cod_gerente', '=', Auth::user()->id)
	    	->get();
	    	$gerentes = User::all();
	    	return view('user/listar',['usuarios'=>$usuarios, 'gerentes'=>$gerentes]);
	    }
	    return redirect('/');
    }
	public function alterar($id){
		$novosDados = Request::all();
		$usuario = User::find($id);
		$usuario->update($novosDados);
		$usuario->save();
		return redirect()->action('UserController@listar');
	}
	public function atualizar($id){
		$resposta = User::find($id);
		$gerentes = User::where('users.acesso', '<=', 2)->get();
		return view('user.formularioAtualiza', ['user'=>$resposta, 'gerentes'=>$gerentes]);	
	}
	public function remover($id){
		$usuario = User::find($id);
		$usuario->delete();
		return redirect()->action('UserController@listar');
	}
}
