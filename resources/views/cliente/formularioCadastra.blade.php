@extends('layouts.formHome')
@section('form')
	<ol class="breadcrumb">
	  <li><a href="/home">Home</a></li>
	  <li class="active">Novo Cliente</li>
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

<script type="text/javascript">

$(document).ready(function(){
	$('#form_prepare').submit(function(){
		var $this = $( this );

		var telefone = $this.find("input[name='telefone']").val();

		var tr = '<tr class="form-group">'+
			'<td>'+telefone+'</td>'+
			'</tr>'+
			'<br>'
		$('#grid').find('tbody').append( tr );

		var hiddens = 
			'<input type="hidden" class="form-group" name="telefone[]" value="'+telefone+'" />';

		$('#form_insert').find('fieldset').append( hiddens );

		return false;
	});
});
</script>

<div class="form-group">
		<form action="/cliente/adicionar" method="post" id="form_insert">
			<input type="hidden" name="_token" value="{{{csrf_token()}}}"/>
	<input type="hidden" name="usuarioID" value="{{Auth::user()->id}}"/>
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
		<input name="emailCliente" class="form-control" placeholder="email@email.com.br" value="{{ old('email') }}">
	</div>
	<div class="form-group">
		<label>CPF</label>
		<input name="cpfCliente" class="form-control" type="number" step="1" min="1" value="{{ old('cpfCliente') }}">
	</div>

	<div class="form-group">
		<label>Data de Nascimento</label>
		<input name="dataNascimento" class="form-control" type="text" placeholder="xx/xx/xxxx" value="{{ old('dataNascimento') }}">
	</div>
	<div class="form-group">
		<label>Nome Mãe</label>
		<input name="nomeMaeCliente" class="form-control" value="{{ old('nomeMaeCliente') }}">
	</div>
	<div class="form-group">
		<label>RG Cliente</label>
		<input name="rgCliente" class="form-control" type="number" placeholder="00.000.000-0" step="1" min="1" value="{{ old('rgCliente') }}">
	</div>
	<div class="form-group">
		<label>expedidorCliente</label>
		<input name="expedidorCliente" class="form-control" value="{{ old('expedidorCliente') }}">
	</div>

	<div class="form-group">
		<label>Data de Emissão do RG</label>
		<input name="dataEmissaoRG" class="form-control" type="text"  placeholder="xx/xx/xxxx" value="{{ old('dataEmissaoRG') }}">

	</div>
	<div class="form-group">
			<label>Observações</label>
			<textarea name="obsCliente" class="form-control" ></textarea>
		</div>	
			<fieldset style="display: none;"></fieldset>
			<label><input type="submit" name="cadastrar" class="btn btn-default" value="Cadastrar" /></label>
		</form><!-- /form_insert -->
	</div><!-- /main -->

	<form action="" method="POST" id="form_prepare">

	<div id="main" class="form-group">
		<table class="table table-striped table-bordered table-hover table-condensed" >
		<tr>			
			<td>Telefone</td>
		</tr>
		<tr>
			<td>
				<div class="form-group">
					<input type="text" name="telefone" class="form-control"  placeholder="XX123456789" id="telefone" maxlength="15" />
				</div>
			</td>

			<td>
				<div class="form-group">
					<input type="submit" name="ok" class="btn btn-default" value="Novo Telefone" />
				</div>
			</td>
		</tr>
		</table>
	</div>
</form>

<div>
<table id="grid" class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<td>Telefone</td>
		</tr>					
	</thead>
		<tbody>
		</tbody>
</table><!-- /grid -->
</div>	

@stop