@extends('layouts.formHome')
@section('form')
	<ol class="breadcrumb">
	  <li><a href="/home">Home</a></li>
	  <li class="active">Filamentos</li>
	</ol>
	<table class="table table-striped table-bordered table-hover">
		<tr>
			<td>Cor</td>
			<td>Fornecedor</td>
			<td>Material</td>			
			<td>Valor</td>			
			<td>Peso</td>
			<td>Alterar</td>
			<td>Remover</td>

		</tr>
	@foreach ($filamentos as $f)
		<tr>
			<td>{{$f->cores->nome_cor}}</td>
			<td>{{$f->fornecedor->nome_fornecedor}}</td>
			<td>{{$f->material->nome_material}}</td>
			<td>R$ {{number_format($f->valor, 2, ',', '.')}}</td>			
			<td>{{$f->peso}}g</td>
			<td><a href="{{action('FilamentoController@atualizar',$f->filamentos_id)}}"><span class="glyphicon glyphicon-edit"></span></a></td>
			<td><a href="{{action('FilamentoController@remove',$f->filamentos_id)}}"><span class="glyphicon glyphicon-trash"></span></a></td>

		</tr>	
			
	@endforeach

	</table>
@endsection
