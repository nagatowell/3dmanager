@extends('layouts.formHome')
@section('form')
<ol class="breadcrumb">
	  <li><a href="/home">Home</a></li>
	  <li class="active">Pesquisar Cliente</li>
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

<form action="/cliente/listarCliente" method="POST">
	<input type="hidden" name="_token" value="{{{csrf_token()}}}"/>
	<br>
	<div class="form-group">
		<label>CPF do Cliente</label>
		<input name="cpfCliente" class="form-control" type="number" step="1" min="1">
	</div>
	<button type="submit" class="btn btn-primary btn-block">Pesquisar</button>
</imput>
@stop