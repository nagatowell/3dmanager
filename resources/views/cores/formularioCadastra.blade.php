@extends('layouts.formHome')
@section('form')
<ol class="breadcrumb">
	  <li><a href="/home">Home</a></li>
	  <li><a href="/cores">Cores</a></li>
	  <li class="active">Nova Cor</li>
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

<form action="/cores/adicionar" method="POST">
	<input type="hidden" name="_token" value="{{{csrf_token()}}}"/>
	<div class="form-group">
		<label>Nome da Cor</label>
		<input name="nome_cor" class="form-control" value="{{ old('nome_cor') }}">
	</div>
	<button type="submit" class="btn btn-primary btn-block">Adicionar</button>
@stop