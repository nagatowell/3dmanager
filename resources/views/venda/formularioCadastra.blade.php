@extends('layouts.formHome')
@section('form')
<ol class="breadcrumb">
	  <li><a href="/home">Home</a></li>
	  <li><a href="/orgao">Orgãos</a></li>
	  <li class="active">Novo Orgão</li>
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

<form action="/orgao/adicionar" method="POST">
	<input type="hidden" name="_token" value="{{{csrf_token()}}}"/>
	<div class="form-group">
		<label>Nome do Orgão</label>
		<input name="nomeOrgao" class="form-control" value="{{ old('nomeOrgao') }}">
	</div>
	<button type="submit" class="btn btn-primary btn-block">Adicionar</button>
@stop