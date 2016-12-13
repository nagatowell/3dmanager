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
		<label>Nome do Material</label>
		<input name="nome_material" class="form-control" value="{{ old('nome_material') }}">
	</div>
	<div class="form-group">
		<label>Temperatura da Mesa</label>
		<input name="temp_mesa" class="form-control" value="{{ old('temp_mesa') }}">
	</div>
	<div class="form-group">
		<label>Temperatura Bico</label>
		<input name="temp_bico" class="form-control" value="{{ old('temp_bico') }}">
	</div>
	<button type="submit" class="btn btn-primary btn-block">Atualizar</button>
</imput>
@stop