@extends('layouts.formHome')
@section('form')
<ol class="breadcrumb">
	  <li><a href="/home">Home</a></li>
	  <li><a href="/pedidos">Pedidos</a></li>
	  <li class="active">Novo Pedido</li>
	</ol>

@if (count($errors) > 0)
<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
		<li>{{$error}}</li>
		@endforeach
	</ul>
</div>
@endif

<form action="/pedidos/adicionar" method="POST">
	<input type="hidden" name="_token" value="{{{csrf_token()}}}"/>
	<div class="form-group">
		<label>Nome do Comprador</label>
		<input name="nome_comprador" class="form-control" value="{{ old('nome_comprador') }}">
	</div>
	<div class="form-group">
		<label>Data do Pedido</label>
		<input name="data_pedido" class="form-control" type="date" value="{{ old('data_pedido') }}">
	</div>
	<div class="form-group">
		<label>Venda</label>
		<input name="venda_id" class="form-control" value="{{ old('venda_id') }}">
	</div>
	<div class="form-group">
		<label>Detalhes</label><br>
		<textarea name="detalhes_pedido" rows="5" cols="125">{{ old('detalhes_pedido') }}
		</textarea>
	</div>
	<button type="submit" class="btn btn-primary btn-block">Adicionar</button>
@stop