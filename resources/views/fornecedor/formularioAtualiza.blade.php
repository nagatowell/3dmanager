@extends('layouts.formHome')
@section('form')
<ol class="breadcrumb">
	  <li><a href="/home">Home</a></li>
	  <li><a href="/fornecedores">Fornecedores</a></li>
	  <li class="active">Atualizar Fornecedor</li>
	</ol>

<form action="/fornecedor/alterar/{{$s->fornecedores_id}}" method="POST">
	<input type="hidden" name="_token" value="{{{csrf_token()}}}"/>
	<div class="form-group">
		<label>Nome do Fornecedor</label>
		<input name="nome_fornecedor" class="form-control" value="{{$s->nome_fornecedor}}">
		<label>Site do Fornecedor</label>
		<input name="site_fornecedor" class="form-control" value="{{$s->site_fornecedor}}">
	</div>
	<button type="submit" class="btn btn-primary btn-block">Atualizar</button>
</imput>
@stop