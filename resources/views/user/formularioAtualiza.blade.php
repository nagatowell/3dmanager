@extends('layouts.formHome')
@section('form')
<ol class="breadcrumb">
      <li><a href="/home">Home</a></li>
      <li><a href="/usuarios">Usuários</a></li>
      <li class="active">Alterar Usuário</li>
    </ol>
<form action="/usuarios/alterar/{{$user->id}}" method="POST">
	<input type="hidden" name="_token" value="{{{csrf_token()}}}"/>
	<div class="form-group">
		<label>ID</label>
		<input name="nome" class="form-control" value="{{$user->id}}" disabled="disabled"">
	<div class="form-group">
		<label>Nome</label>
		<input name="name" class="form-control" value="{{$user->name}}">
	</div>
	<div class="form-group">
		<label>CPF</label>
		<input name="cpfUser" class="form-control" value="{{$user->cpfUser}}">
	</div>
	<div class="form-group">
	    <label>Cargo</label>
	    <input id="cargo" type="text" class="form-control" name="cargo" value="{{$user->cargo}}">
	</div>
	<div class="form-group">
	    <label>Ramal</label>	                        
	    <input id="ramal" type="text" class="form-control" name="ramal" value="{{$user->ramal}}">	        
	</div>
	<div class="form-group}}">
	    <label>WhatsApp</label>
		<input id="whatsapp" type="text" class="form-control" name="whatsapp" value="{{$user->whatsapp}}">
	</div>
	<div class="form-group">
		<label>Email</label>
		<input name="email" class="form-control" value="{{$user->email}}">
	</div>
	<div class="form-group">
		<label>Acesso</label>
		<select class="form-control" name="acesso" value="{{'$user->acesso'}}">
		    @if (Auth::user()->acesso == 1)
		    <option value="1" >Administrador</option>
		    <option value="2" >Gerente</option>   
		    @endif
		    @if (Auth::user()->acesso == 1 || Auth::user()->acesso == 2)
		                                     
		    <option value="3" selected="true">Consultor</option>
		    @endif
		</select>
	</div>
	@if (Auth::user()->acesso == 1)
    <div class="form-group">
        <label>Gerente</label>
            <select class="form-control" name="cod_gerente">
                @foreach ($gerentes as $op)
                    <option value="{{$op->id}}" >{{$op->name}}</option>
                @endforeach
            </select>
    </div>
    @endif
	<button type="submit" class="btn btn-primary btn-block">Atualizar</button>
</imput>
@stop