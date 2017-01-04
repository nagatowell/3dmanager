@extends('layouts.formHome')
@section('form')
<ol class="breadcrumb">
	  <li><a href="/home">Home</a></li>
	  <li><a href="/vendas">Vendas</a></li>
	  <li class="active">Atualizar Venda</li>
	</ol>

<form action="/venda/alterar/{{$v->vendas_id}}" method="POST">
	<input type="hidden" name="_token" value="{{{csrf_token()}}}"/>
	<div class="form-group">
		<label>Data da Venda</label>
		<input name="data_venda" class="form-control" type="date" value="{{ $v->data_venda }}">
	</div>
	<div class="form-group">
		<label>Data da Postagem</label>
		<input name="data_postagem" class="form-control" type="date" value="{{ $v->data_postagem }}">
	</div>
	<div class="form-group">
		<label>Valor da Venda</label>
		<input name="valor_venda" class="form-control" type="number" step="0.10"  value="{{$v->valor_venda}}">
	</div>
		<label>Cep do Frete</label>
		<input name="cep_frete" class="form-control" value="{{$v->cep_frete}}">
	<div class="form-group">
		<label>Valor do Frete</label>
		<input name="valor_frete" class="form-control" type="number" step="0.10"  value="{{$v->valor_frete}}">
	</div>
	<button type="submit" class="btn btn-primary btn-block">Atualizar</button>
</imput>
@stop