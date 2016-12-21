@extends('layouts.formHome')
@section('form')
<ol class="breadcrumb">
	  <li><a href="/home">Home</a></li>
	  <li class="active">Detalhes da Peça</li>
	</ol>
			<h1>Informações da Peça: {{$b->pecas_id }}</h1>
				<ul>
					<li><b>Nome do Banco: </b>{{$p->nomeBanco}}</li>
				</ul>
@stop