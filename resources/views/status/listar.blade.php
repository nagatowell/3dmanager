@extends('layouts.formHome')
@section('form')
	<ol class="breadcrumb">
	  <li><a href="/home">Home</a></li>
	  <li class="active">Filamentos</li>
	</ol>
	<table class="table table-striped table-bordered table-hover">
		<tr>
			<td>Nome Status</td>
			<td>Descrição do Status</td>
			<td>Alterar</td>
			<td>Remover</td>

		</tr>
	@foreach ($status as $s)
		<tr>
			<td>{{$s->nome_status}}</td>			
			<td>{{$s->descricao_status}}</td>
			<td><a href="{{action('StatusImpController@atualizar',$s->status_imp_id)}}"><span class="glyphicon glyphicon-edit"></span></a></td>
			<td><a href="{{action('StatusImpController@remove',$s->status_imp_id)}}"><span class="glyphicon glyphicon-trash"></span></a></td>

		</tr>	
			
	@endforeach

	</table>
@endsection
