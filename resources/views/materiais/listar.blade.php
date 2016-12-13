@extends('layouts.formHome')
@section('form')
	<ol class="breadcrumb">
	  <li><a href="/home">Home</a></li>
	  <li class="active">Materiais</li>
	</ol>
	<table class="table table-striped table-bordered table-hover">
		<tr>
			<td>Nome Material</td>
			<td>Temperatura da Mesa</td>
			<td>Tempreratura do Bico</td>
			<td>Alterar</td>
			<td>Remover</td>
		</tr>
	@foreach ($materiais as $m)
		<tr>
			<td>{{$m->nome_material}}</td>
			<td>{{$m->temp_mesa}}</td>
			<td>{{$m->temp_bico}}</td>
			<td><a href="{{action('MaterialController@atualizar',$m->materiais_id)}}"><span class="glyphicon glyphicon-edit"></span></a></td>
			<td><a href="{{action('MaterialController@remove',$m->materiais_id)}}"><span class="glyphicon glyphicon-trash"></span></a></td>

		</tr>	
			
	@endforeach

	</table>
@endsection
