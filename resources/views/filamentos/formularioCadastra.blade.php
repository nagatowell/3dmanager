@extends('layouts.formHome')
@section('form')
<ol class="breadcrumb">
	  <li><a href="/home">Home</a></li>
	  <li><a href="/filamentos">Filamentos</a></li>
	  <li class="active">Novo Filemanto</li>
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

<form action="/filamentos/adicionar" method="POST">
	<input type="hidden" name="_token" value="{{{csrf_token()}}}"/>
	
	<div class="form-group">
		<label>Cores</label>
		<select class="form-control" name="cores_id" value="1">
		@foreach ($cores as $c)
			<option value="{{$c->cores_id}}" >{{$c->nome_cor}}</option>
		@endforeach
		</select>
	</div>
	<div class="form-group">
		<label>Fornecedores</label>
		<select class="form-control" name="fornecedores_id" value="1">
		@foreach ($fornecedores as $f)
			<option value="{{$f->fornecedores_id}}" >{{$f->nome_fornecedor}}</option>
		@endforeach
		</select>
	</div>
	<div class="form-group">
		<label>Material</label>
		<select class="form-control" name="materiais_id" value="1">
		@foreach ($material as $m)
			<option value="{{$m->materiais_id}}" >{{$m->nome_material}}</option>
		@endforeach
		</select>
	</div>
	<div class="form-group">
		<label>Valor (R$)</label>
		<input name="valor" class="form-control" type="number" value="{{ old('valor') }}">
	</div>	
	<div class="form-group">
		<label>Peso (g)</label>
		<input name="peso" class="form-control" type="number" value="{{ old('peso') }}">
	</div>

	<button type="submit" class="btn btn-primary btn-block">Adicionar</button>
@stop