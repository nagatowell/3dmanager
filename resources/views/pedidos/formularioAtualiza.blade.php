@extends('layouts.formHome')
@section('form')
<ol class="breadcrumb">
	  <li><a href="/home">Home</a></li>
	  <li><a href="/pedidos">Pedidos</a></li>
	  <li class="active">Atualizar Banco</li>
	</ol>

<form action="/pedido/alterar/{{$p->pedidos_id}}" method="POST">
	<input type="hidden" name="_token" value="{{{csrf_token()}}}"/>
	<div class="form-group">
		<label>Nome do Comprador</label>
		<input name="nome_comprador" class="form-control" value="{{ $p->nome_comprador }}">
	</div>
	<div class="form-group">
		<label>Data do Pedido</label>
		<input name="data_pedido" class="form-control" type="date" value="{{ $p->data_pedido }}">
	</div>
	<div class="form-group">
		<label>Detalhes</label><br>
		<textarea name="detalhes_pedido" rows="5" cols="125">{{ $p->detalhes_pedido }}</textarea>
	</div>
	<button type="submit" class="btn btn-primary btn-block">Atualizar</button>
</imput>
@stop