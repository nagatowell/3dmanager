@extends('layouts.formHome')
@section('form')
	<ol class="breadcrumb">
	  <li><a href="/home">Home</a></li>
	  <li class="active">Clientes</li>
	</ol>
	<table class="table table-striped table-bordered table-hover">
		<tr>
			<td>Nome</td>
			<td>Email</td>
			<td>CPF</td>
			
				<td>Cliente</td>
				@if (!(Auth::guest()))
				<td>Detalhes</td>
				<td>Nova Simulação</td>
				<td>Alterar</td>
				
			@endif
		</tr>
	@foreach ($clientes as $c)
		<tr>
			<td>{{$c->nomeCliente}}</td>
			<td>{{$c->emailCliente}}</td>
			<td>{{$c->cpfCliente}}</td>	
			
			<td><a href="{{action('ClienteController@detalhes',$c->cpfCliente)}}"><span class="glyphicon glyphicon-user"></span></a></td>
			@if (!(Auth::guest()))
			<td><a href="{{action('AgrupadorController@listarCPF',$c->cpfCliente)}}"><span class="glyphicon glyphicon-search"></span></a></td>
			<td><a href="{{action('AgrupadorController@novo',$c->cpfCliente)}}"><span class="glyphicon glyphicon-plus"></span></a></td>
			<td><a href="{{action('ClienteController@atualizar',$c->cpfCliente)}}"><span class="glyphicon glyphicon-edit"></span></a></td>
							
				
				
			@endif
		</tr>	
			
	@endforeach

	</table>
	{{ $clientes->links() }}
@endsection
