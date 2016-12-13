@extends('layouts.formHome')
@section('form')
<ol class="breadcrumb">
	  <li><a href="/home">Home</a></li>
	  <li><a href="/status">Status</a></li>
	  <li class="active">Atualizar Status</li>
	</ol>

<form action="/status/alterar/{{$s->status_imp_id}}" method="POST">
	<input type="hidden" name="_token" value="{{{csrf_token()}}}"/>
	<div class="form-group">
		<label>Nome Status</label>
		<input name="nome_status" class="form-control" type="text" value="{{ $s->nome_status }}">
	</div>
	<div class="form-group">
		<label>Descrição do Status</label>
		<input name="descricao_status" class="form-control" type="text" value="{{ $s->descricao_status }}">
	</div>
	<button type="submit" class="btn btn-primary btn-block">Atualizar</button>
</imput>
@stop