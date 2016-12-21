@extends('layouts.formHome')
@section('form')
<ol class="breadcrumb">
	  <li><a href="/home">Home</a></li>
	  <li><a href="/pecas">Peças</a></li>
	  <li class="active">Nova Peça</li>
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

<form action="/pecas/adicionar" method="POST">
	<input type="hidden" name="_token" value="{{{csrf_token()}}}"/>
	<div class="form-group">
		<label>Nome da Peça</label>
		<input name="nome_peca" class="form-control" value="{{ old('nome_peca') }}">
	</div>
	<div class="form-group">
		<label>Link Thingiverse</label>
		<input name="link_thing" class="form-control" value="{{ old('link_thing') }}">
	</div>
	<div class="form-group">
		<label>Quantidade de peças</label>
		<input name="quant_peca" class="form-control" value="{{ old('quant_peca') }}">
	</div>
	<button type="submit" class="btn btn-primary btn-block">Adicionar</button>
@stop