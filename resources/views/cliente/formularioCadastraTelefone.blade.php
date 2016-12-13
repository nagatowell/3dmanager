@extends('layouts.formHome')
@section('form')

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
	<ol class="breadcrumb">
	  <li><a href="/home">Home</a></li>
	  <li><a href="/cliente">Clientes</a></li>
	  <li><a href="/cliente/mostra/{{$cliente->cpfCliente}}">Detalhes do Cliente</a></li>
	  <li class="active">Adicionar Telefone</li>
	</ol>
	<table class="table table-striped table-bordered table-hover">
		<tr>
			<td>Nome</td>
			<td>Email</td>
			<td>CPF</td>
			<td>Observações</td>
		</tr>
		<tr>
			<td>{{$cliente->nomeCliente}}</td>
			<td>{{$cliente->emailCliente}}</td>
			<td>{{$cliente->cpfCliente}}</td>	
			<td>{{$cliente->obs}}</td>
		</tr>	

	</table>




	<form action="" method="POST" id="form_prepare">

	<div id="main" class="form-group">
		<table class="table table-striped table-bordered table-hover table-condensed" >
		<tr>			
			<td>Telefone</td>
		</tr>
		<tr>
			<td>
				<div class="form-group">
					<input type="text" name="telefone" class="form-control" id="telefone" maxlength="15" />
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
<div class="form-group">
		<form action="/cliente/telefone" method="post" id="form_insert">
			<input type="hidden" name="_token" value="{{{csrf_token()}}}"/>
	<input type="hidden" name="cod_usuario" value="{{Auth::user()->id}}"/>
	<input type="hidden" name="cpfCliente" class="form-control" value="{{$cliente->cpfCliente}}">
			<fieldset style="display: none;"></fieldset>
			<label><input type="submit" name="cadastrar" class="btn btn-default" value="Cadastrar" /></label>
		</form><!-- /form_insert -->
	</div><!-- /main -->
@endsection
