@extends('layouts.formHome')
@section('form')
	<ol class="breadcrumb">
	  <li><a href="/home">Home</a></li>
	  <li><a href="/cliente">Cliente</a></li>
	  <li class="active">Detalhe do Cliente</li>
	</ol>
	@if(Session::has('message'))
    <div class="alert alert-info">
        {{ Session::get('message') }}
    </div>
@endif
	<table class="table table-striped table-bordered table-hover">
		<tr>
			<td>Nome</td>
			<td>Email</td>
			<td>CPF</td>
			<td>Observações</td>
			<td>Telefone</td>
		</tr>
		<tr>
			<td>{{$cliente->nomeCliente}}</td>
			<td>{{$cliente->emailCliente}}</td>
			<td><a href="{{action('ClienteController@listarPesquisarGET',$cliente->cpfCliente)}}">{{$cliente->cpfCliente}}</a></td>	
			<td>{{$cliente->obsCliente}}</td>
			<td><a href="{{action('ClienteController@novoTel',$cliente->cpfCliente)}}"><span class="glyphicon glyphicon-plus"></span></a></td>	
		</tr>	

	</table>
	@if (!is_null($cliente->inss))
	<table class="table table-striped table-bordered table-hover">
		<tr>
			<td>Beneficio</td>
		</tr>
		@foreach ($cliente->inss as $beneficio)
		<tr>
			<td><a href="{{action('IntMultiBRController@listarBeneficio',$beneficio->beneficioCliente)}}">{{$beneficio->beneficioCliente}}</a></td>	
		</tr>
		@endforeach		
	</table>
	@endif
	<form action="/cliente/telefone/{{$cliente->cpfCliente}}" method="POST">
	<table class="table table-striped table-bordered table-hover">
		<tr>
			<td>Telefone</td>
			<td>Telefone</td>
		</tr>
		@foreach ($cliente->telefones as $telefone)
		<tr>			
			<td>{{$telefone->numeroTel}}</td>
			<td><a href="{{action('ClienteController@removeTel',$telefone->telefone_id)}}"><span class="glyphicon glyphicon-trash"></span></a></td>	
		</tr>
		@endforeach	
		<tr>
			
		</tr>	
	</table>
	</form>
	
	
	
@endsection
