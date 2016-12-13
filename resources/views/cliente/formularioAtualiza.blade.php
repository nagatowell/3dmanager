@extends('layouts.formHome')
@section('form')
	<ol class="breadcrumb">
	  <li><a href="/home">Home</a></li>
	  <li><a href="/cliente">Clientes</a></li>
	  <li class="active">Alterar Cliente</li>
	</ol>

<form action="/cliente/alterar/{{$c->cpfCliente}}" method="POST">
	<input type="hidden" name="_token" value="{{{csrf_token()}}}"/>
	<div class="form-group">
		<label>Nome</label>
		<input name="nomeCliente" class="form-control" value="{{$c->nomeCliente}}">
	</div>
		<div class="form-group">
		<label>Email</label>
		<input name="emailCliente" class="form-control" value="{{$c->emailCliente}}">
	</div>
	<div class="form-group">
		<label>CPF</label>
		<input name="cpfCliente" class="form-control" type="number" step="1" min="1" value="{{$c->cpfCliente}}">
	</div>
	<div class="form-group">
		<label>Data de Nascimento</label>
		<input name="dataNascimento" class="form-control" type="text" placeholder="xx/xx/xxxx" value="{{ $c->dataNascimento }}">
	</div>
	<div class="form-group">
		<label>Nome Mãe</label>
		<input name="nomeMaeCliente" class="form-control" value="{{ $c->nomeMaeCliente}}">
	</div>
	<div class="form-group">
		<label>RG Cliente</label>
		<input name="rgCliente" class="form-control" type="number" step="1" min="1" value="{{ $c->rgCliente }}">
	</div>
	<div class="form-group">
		<label>expedidorCliente</label>
		<input name="expedidorCliente" class="form-control" placeholder="xx/xx/xxxx" value="{{ $c->expedidorCliente }}">
	</div>

	<div class="form-group">
		<label>Data de Emissão do RG</label>
		<input name="dataEmissaoRG" class="form-control" type="text"  value="{{ $c->dataEmissaoRG }}">

	</div>
	@if (Auth::user()->acesso == 1 || Auth::user()->acesso == 2)
	<div class="form-group">
		<label>Usuário</label>
		<select class="form-control" name="usuarioID">
		@foreach ($usuarios as $u)
			@if ($c->usuarioID == $u->id)
				<option value="{{$u->id}}" selected>{{$u->name}}</option>
			@else
			<option value="{{$u->id}}" >{{$u->name}}</option>
			@endif
		@endforeach
		</select>
	</div>
	@endif
	<div>
	<button type="submit" class="btn btn-primary">Atualizar</button>
	</div>
</form>
@stop