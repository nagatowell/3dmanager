@extends('layouts.formHome')
@section('form')
	<ol class="breadcrumb">
      <li><a href="/home">Home</a></li>
      <li class="active">Usuários</li>
    </ol>
	<table class="table table-striped table-bordered table-hover">
		<tr>
			<td>ID</td>
			<td>Nome do Usuário</td>
			<td>Email</td>
			<td>Acesso</td>	
			@if (Auth::user()->acesso == 1 || Auth::user()->acesso == 2)

				<td>Alterar</td>
				<td>Remover</td>
			@endif
		</tr>
	@foreach ($usuarios as $s)
		<tr>
			<td>{{$s->id}}</td>
			<td>{{$s->name}}</td>
			<td>{{$s->email}}</td>
			<td>{{$s->acesso}}</td>	
			@if (Auth::user()->acesso == 1 || Auth::user()->acesso == 2)

				<td><a href="{{action('UserController@atualizar',$s->id)}}"><span class="glyphicon glyphicon-pencil
"></span></a></td>
				<td><a href="{{action('UserController@remover',$s->id)}}"><span class="glyphicon glyphicon-remove
"></span></a></td>
			@endif
		</tr>	
			
	@endforeach

	</table>
@endsection
