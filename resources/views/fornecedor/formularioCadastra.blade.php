@extends('layouts.formHome')
@section('form')
<ol class="breadcrumb">
	  <li><a href="/home">Home</a></li>
	  <li><a href="/fornecedores">Fornecedores</a></li>
	  <li class="active">Novo Fornecedor</li>
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

<form action="/fornecedores/adicionar" method="POST">
	<input type="hidden" name="_token" value="{{{csrf_token()}}}"/>
	<div class="form-group">
		<label>Nome do Fornecedor</label>
		<input name="nome_fornecedor" class="form-control" value="{{ old('nome_fornecedor') }}">
	</div>
	<div class="form-group">
		<label>Site do Fornecedor</label>
		<input name="site_fornecedor" class="form-control" value="{{ old('site_fornecedor') }}">
	</div>
	<button type="submit" class="btn btn-primary btn-block">Adicionar</button>
@stop