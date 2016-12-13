@extends('layouts.formHome')
@section('form')
<ol class="breadcrumb">
	  <li><a href="/home">Home</a></li>
	  <li><a href="/status">Status</a></li>
	  <li class="active">Novo Status</li>
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

<form action="/status/adicionar" method="POST">
	<input type="hidden" name="_token" value="{{{csrf_token()}}}"/>
	
	<div class="form-group">
		<label>Nome Status</label>
		<input name="nome_status" class="form-control" type="text" value="{{ old('nome_status') }}">
	</div>	
	<div class="form-group">
		<label>Descrição do Status</label>
		<input name="descricao_status" class="form-control" type="text" value="{{ old('descricao_status') }}">
	</div>

	<button type="submit" class="btn btn-primary btn-block">Adicionar</button>
@stop