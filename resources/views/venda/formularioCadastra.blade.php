@extends('layouts.formHome')
@section('form')
<ol class="breadcrumb">
	  <li><a href="/home">Home</a></li>
	  <li><a href="/vendas">Vendas</a></li>
	  <li class="active">Nova Venda</li>
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

<form action="/vendas/adicionar" method="POST">
	<input type="hidden" name="_token" value="{{{csrf_token()}}}"/>
	<input type="hidden" name="pedidos_id" value="{{$id}}"/>
	<div class="form-group">
		<label>Data da Venda</label>
		<input name="data_venda" class="form-control" type="date" value="">
	</div>
	<div class="form-group">
		<label>Data da Postagem</label>
		<input name="data_postagem" class="form-control" type="date" value="">
	</div>
	<div class="form-group">
		<label>Valor da Venda</label>
		<input name="valor_venda" class="form-control" type="number" step="0.10"  value="">
	</div>
		<label>Cep do Frete</label>
		<input name="cep_frete" class="form-control" value="">
	<div class="form-group">
		<label>Valor do Frete</label>
		<input name="valor_frete" class="form-control" type="number" step="0.10"  value="">
	</div>
	<button type="submit" class="btn btn-primary btn-block">Adicionar</button>
@stop