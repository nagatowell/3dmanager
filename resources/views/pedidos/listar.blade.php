@extends('layouts.formHome')
@section('form')
	<ol class="breadcrumb">
	  <li><a href="/home">Home</a></li>
	  <li class="active">Pedidos</li>
	</ol>
	<table class="table table-striped table-bordered table-hover">
		<tr>
			<td>Nome do Comprador</td>
			<td>Data do Pedido</td>
			<td>Venda</td>
			<td>Detalhes</td>
			<td>Alterar</td>
			<td>Remover</td>

		</tr>
	@foreach ($pedidos as $p)
		<tr>
			<td>{{$p->nome_comprador}}</td>
			<td>{{$p->data_pedido}}</td>
			<td>{{$p->venda_id}}</td>
			<td>{{$p->detalhes_pedido}}</td>
			<td><a href="{{action('PedidoController@atualizar',$p->pedidos_id)}}"><span class="glyphicon glyphicon-edit"></span></a></td>
			<td><a href="{{action('PedidoController@remove',$p->pedidos_id)}}"><span class="glyphicon glyphicon-trash"></span></a></td>

		</tr>	
			
	@endforeach

	</table>
@endsection
