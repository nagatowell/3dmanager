@extends('layouts.formHome')
@section('form')
	<ol class="breadcrumb">
	  <li><a href="/home">Home</a></li>
	  <li class="active">Fornecedores</li>
	</ol>
	<table class="table table-striped table-bordered table-hover">
		<tr>
			<td>Nome do Fornecedor</td>
			<td>Site do Fornecedor</td>
			<td>Alterar</td>
			<td>Remover</td>

		</tr>
	@foreach ($fornecedores as $f)
		<tr>
			<td>{{$f->nome_fornecedor}}</td>
			<td>{{$f->site_fornecedor}}</td>
			<td><a href="{{action('FornecedorController@atualizar',$f->fornecedores_id)}}"><span class="glyphicon glyphicon-edit"></span></a></td>
			<td><a href="{{action('FornecedorController@remove',$f->fornecedores_id)}}"><span class="glyphicon glyphicon-trash"></span></a></td>

		</tr>	
			
	@endforeach

	</table>
@endsection
