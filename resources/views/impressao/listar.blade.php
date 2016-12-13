@extends('layouts.formHome')
@section('form')
	<ol class="breadcrumb">
	  <li><a href="/home">Home</a></li>
	  <li class="active">Bancos</li>
	</ol>
	<table class="table table-striped table-bordered table-hover">
		<tr>
			<td>ID</td>
			<td>Nome</td>
			<td>Sigla</td>

		</tr>
	@foreach ($bancos as $b)
		<tr>
			<td>{{$b->bancos_id}}</td>
			<td>{{$b->nomeBanco}}</td>
			<td>{{$b->siglaBanco}}</td>

		</tr>	
			
	@endforeach

	</table>
@endsection
