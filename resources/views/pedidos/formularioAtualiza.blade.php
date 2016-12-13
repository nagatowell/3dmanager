@extends('layouts.formHome')
@section('form')
<ol class="breadcrumb">
	  <li><a href="/home">Home</a></li>
	  <li><a href="/bancos">Bancos</a></li>
	  <li class="active">Atualizar Banco</li>
	</ol>

<form action="/banco/alterar/{{$s->bancos_id}}" method="POST">
	<input type="hidden" name="_token" value="{{{csrf_token()}}}"/>
	<div class="form-group">
		<label>Código Banco</label>
		<input name="bancos_id" class="form-control" value="{{$s->bancos_id}}">
		<label>Nome do Banco</label>
		<input name="nomeBanco" class="form-control" value="{{$s->nomeBanco}}">
		<label>Sigla</label>
		<input name="siglaBanco" class="form-control" value="{{$s->siglaBanco}}">
	</div>
	<button type="submit" class="btn btn-primary btn-block">Atualizar</button>
</imput>
@stop