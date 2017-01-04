@extends('layouts.formHome')
@section('form')
	<ol class="breadcrumb">
	  <li><a href="/home">Home</a></li>
	  <li class="active"><a href="/vendas">Vendas</a></li>
	</ol>
	<table class="table table-striped table-bordered table-hover">
		<tr>
			<td>Pedido</td>
			<td>Data da Venda</td>
			<td>Valor da Venda</td>			
			<td>Data da Postagem</td>
			<td>Valor do Frete</td>
			<td>CEP do Frete</td>
			<td>Alterar</td>

		</tr>
	@foreach ($vendas as $v)
		<tr>
			<td><a href="{{action('PedidoController@listarId',$v->pedidos_id)}}"><span class="glyphicon glyphicon-search"></span></a></td>
			<td>{{$v->data_venda}}</td>
			<td>R$ {{number_format($v->valor_venda, 2, ',', '.')}}</td>	
			<td>{{$v->data_postagem}}</td>
			<td>R$ {{number_format($v->valor_frete, 2, ',', '.')}}</td>	
			<td>{{$v->cep_frete}}</td>
			<td><a href="{{action('VendaController@atualizar',$v->vendas_id)}}"><span class="glyphicon glyphicon-edit"></span></a></td>

		</tr>	

			
	@endforeach

	</table>
	{{ $vendas->links() }}
@endsection
