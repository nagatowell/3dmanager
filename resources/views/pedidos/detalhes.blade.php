@extends('layouts.formHome')
@section('form')
<ol class="breadcrumb">
	  <li><a href="/home">Home</a></li>
	  <li class="active">Detalhes Banco</li>
	</ol>
			<h1>Informações do Banco: {{$b->bancos_id }}</h1>
				<ul>
					<li><b>Nome do Banco: </b>{{$b->nomeBanco}}</li>
				</ul>
@stop