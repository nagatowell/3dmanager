@extends('layouts.formHome')
@section('form')
	<ol class="breadcrumb">
	  <li><a href="/home">Home</a></li>
	  <li class="active"><a href="/pedidos">Pedidos</a></li>
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
			@if ($p->vendas_id == null)
			<td><a href="{{action('VendaController@novo',$p->pedidos_id)}}"><span class="glyphicon glyphicon-usd"></span></a></td>
			@else
			<td><a href="{{action('VendaController@listarId',$p->vendas_id)}}"><span class="glyphicon glyphicon-usd"></span></a></td>
			@endif
			<td>{{$p->detalhes_pedido}}</td>
			<td><a href="{{action('PedidoController@atualizar',$p->pedidos_id)}}"><span class="glyphicon glyphicon-edit"></span></a></td>
			<td><a href="{{action('PedidoController@remove',$p->pedidos_id)}}"><span class="glyphicon glyphicon-trash"></span></a></td>

		</tr>	

			
	@endforeach

	</table>
	{{ $pedidos->links() }}
@endsection
