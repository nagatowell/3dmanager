@extends('layouts.formHome')
@section('form')
	<ol class="breadcrumb">
	  <li><a href="/home">Home</a></li>
	  <li class="active">Cores</li>
	</ol>
	<table class="table table-striped table-bordered table-hover">
		<tr>
			<td>Nome</td>
			<td>Alterar</td>
			<td>Remover</td>
		</tr>
	@foreach ($cores as $c)
		<tr>
			<td>{{$c->nome_cor}}</td>
			<td><a href="{{action('CorController@atualizar',$c->cores_id)}}"><span class="glyphicon glyphicon-edit"></span></a></td>
			<td><a href="{{action('CorController@remove',$c->cores_id)}}"><span class="glyphicon glyphicon-trash"></span></a></td>
		</tr>	
			
	@endforeach

	</table>
	{{ $cores->links() }}
@endsection
