@extends('layouts.formHome')
@section('form')
<ol class="breadcrumb">
	  <li><a href="/home">Home</a></li>
	  <li><a href="/filamentos">Filamentos</a></li>
	  <li class="active">Atualizar Filamento</li>
	</ol>

<form action="/filamento/alterar/{{$s->filamentos_id}}" method="POST">
	<input type="hidden" name="_token" value="{{{csrf_token()}}}"/>
	<div class="form-group">
		<label>Valor</label>
		<input name="valor" class="form-control" type="number" value="{{ $s->valor }}">
	</div>
	<div class="form-group">
		<label>Material</label>
		<select class="form-control" name="materiais_id" value="{{$s->materiais_id}}">
		@foreach ($material as $m)
		@if($m->materiais_id == $s->materiais_id)
			<option value="{{$m->materiais_id}}" selected="true">{{$m->nome_material}}</option>
		@else
			<option value="{{$m->materiais_id}}">{{$m->nome_material}}</option>
		@endif
		@endforeach
		</select>
	</div>
	<div class="form-group">
		<label>Cores</label>
		<select class="form-control" name="cores_id" value="{{$s->cores_id}}">
		@foreach ($cores as $c)
			@if($c->cores_id == $s->cores_id)
				<option value="{{$c->cores_id}}" selected="true">{{$c->nome_cor}}</option>
			@else
				<option value="{{$c->cores_id}}" >{{$c->nome_cor}}</option>
			@endif
		@endforeach
		</select>
	</div><div class="form-group">
		<label>Fornecedores</label>
		<select class="form-control" name="fornecedores_id" value="{{$s->fornecedores_id}}">
		@foreach ($fornecedores as $f)
			@if($f->fornecedores_id == $s->fornecedores_id)
				<option value="{{$f->fornecedores_id}}" selected="true">{{$f->nome_fornecedor}}</option>
			@else
				<option value="{{$f->fornecedores_id}}" >{{$f->nome_fornecedor}}</option>
			@endif
		@endforeach
		</select>
	</div>
	<div class="form-group">
		<label>Peso</label>
		<input name="peso" class="form-control" type="number" value="{{ $s->peso }}">
	</div>
	<button type="submit" class="btn btn-primary btn-block">Atualizar</button>
</imput>
@stop