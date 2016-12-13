@extends('layouts.formHome')
@section('form')
<ol class="breadcrumb">
	  <li><a href="/home">Home</a></li>
	  <li><a href="/material">Material</a></li>
	  <li class="active">Novo Material</li>
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

<form action="/materiais/adicionar" method="POST">
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

	<button type="submit" class="btn btn-primary btn-block">Adicionar</button>
</form>
@stop