@extends('layouts.formHome')
@section('form')
<ol class="breadcrumb">
	  <li><a href="/home">Home</a></li>
	  <li><a href="/cores">Cores</a></li>
	  <li class="active">Atualizar Cor</li>
	</ol>

<form action="/cor/alterar/{{$s->cores_id}}" method="POST">
	<input type="hidden" name="_token" value="{{{csrf_token()}}}"/>
	<div class="form-group">
		<label>Nome da Cor</label>
		<input name="nome_cor" class="form-control" value="{{$s->nome_cor}}">
	</div>
	<button type="submit" class="btn btn-primary btn-block">Atualizar</button>
</imput>
@stop