@extends('layouts.formHome')
@section('form')
	<ol class="breadcrumb">
	  <li><a href="/home">Home</a></li>
	  <li class="active">Novo Cliente Receptivo</li>
	</ol>

@if (!(is_null($message)))
<div class="alert alert-danger">
	<ul>
		
		<li>{{$message}}</li>
		
	</ul>
</div>
@endif
@if (count($errors) > 0)
<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
		<li>{{$error}}</li>
		@endforeach
	</ul>
</div>
@endif

<div class="form-group">
		<form action="/clienteReceptivo/adicionar" method="post" id="form_insert">
			<input type="hidden" name="_token" value="{{{csrf_token()}}}"/>
			<div class="form-group">
				<select class="form-control" name="sexo">
				<option value="" selected="true">--Selecione--</option>
					<option value="M" >Sr.</option>
					<option value="F" >Sra.</option>
				</select>
			</div>
			<div class="form-group">
				<label>Nome</label>
				<input name="nomeCliente" class="form-control" value="{{ old('nomeCliente') }}">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input name="emailCliente" class="form-control" value="{{ old('email') }}">
			</div>
			
			<div class="form-group">
				<label>Telefone</label>
				<input type="text" name="telefone" class="form-control" id="telefone" maxlength="15" />
			</div>
			<div class="form-group">
				<label>CPF</label>
				<input name="cpfCliente" class="form-control" type="number" step="1" min="1" value="{{ old('cpfCliente') }}" placeholder="Somente Números">
			</div>
			<div class="form-group">
				<label>Observações</label>
				<textarea name="obs" class="form-control" placeholder="Informe ao atendente detalhes ou a sua dúvida."></textarea>
			</div>	
			<label><input type="submit" name="cadastrar" class="btn btn-default" value="Solicitar" /></label>
		</form><!-- /form_insert -->
</div><!-- /main -->

@stop