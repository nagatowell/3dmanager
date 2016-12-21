@extends('layouts.formHome')
@section('form')
	<ol class="breadcrumb">
	  <li><a href="/home">Home</a></li>
	  <li class="active">Peças</li>
	</ol>
	<table class="table table-striped table-bordered table-hover">
		<tr>
			<td>Nome da Peça</td>
			<td>Link do Thingiverse</td>
			<td>Quantidade</td>
			<td>Alterar</td>
			<td>Remover</td>

		</tr>
	@foreach ($pecas as $p)
		<tr>
			<td>{{$p->nome_peca}}</td>
			<td>{{$p->link_thing}}</td>
			<td>{{$p->quant_peca}}</td>
			<td><a href="{{action('PecaController@atualizar',$p->pecas_id)}}"><span class="glyphicon glyphicon-edit"></span></a></td>
			<td><a href="{{action('PecaController@remove',$p->pecas_id)}}"><span class="glyphicon glyphicon-trash"></span></a></td>

		</tr>	
			
	@endforeach

	</table>
@endsection
