@extends('layouts.formHome')
@section('form')
<ol class="breadcrumb">
	  <li><a href="/home">Home</a></li>
	  <li><a href="/impressoes">Impressões</a></li>
	  <li class="active">Nova Impressão</li>
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

<form action="/impressoes/adicionar" method="POST">
	<input type="hidden" name="_token" value="{{{csrf_token()}}}"/>
	<div class="form-group">
		<label>Filamentos</label>
		<select class="form-control" name="filamento_id" value="1">
		@foreach ($filamentos as $s)
			<option value="{{$s->filamento_id}}" >{{$s->filamentos_id}}</option>
		@endforeach
		</select>
	</div>
	<div class="form-group">
		<label>Peça</label>
		<select class="form-control" name="peca_id" value="1">
		@foreach ($pecas as $s)
			<option value="{{$s->pecas_id}}" >{{$s->nome_peca}}</option>
		@endforeach
		</select>
	</div>
	<div class="form-group">
		<label>Pedido</label>
		<select class="form-control" name="pedido_id" value="1">
		@foreach ($pedidos as $s)
			<option value="{{$s->pedidos_id}}" >Pedido: {{$s->pedidos_id}} {{$s->nome_comprador}}</option>
		@endforeach
		</select>
	</div>
	<label>Infill</label>
	<div class="form-group">
    <div class="input-group">
      <input type="number" class="form-control" placeholder="Infill" name="infill">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">%</button>
      </span>
    </div><!-- /input-group -->
  </div>
  <label>Peso</label>
	<div class="form-group">
    <div class="input-group">
      <input type="number" class="form-control" placeholder="10" name="peso_impressao">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">g</button>
      </span>
    </div><!-- /input-group -->
  </div>

  <label>Camada de Impressão</label>
	<div class="form-group">
    <div class="input-group">
      <input type="number" class="form-control" placeholder="0.00" name="camada_impressao">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">mm</button>
      </span>
    </div><!-- /input-group -->
  </div>
  <div class="form-group">
		<label>Quantidade</label>
		<input name="quant_impressao" class="form-control" value="{{ old('quant_impressao') }}">
	</div>

	<label>Tempo de Impressão</label>
	<div class="form-group">
    <div class="input-group">
      <input type="number" class="form-control" placeholder="120" name="tempo_impressao">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">minutos</button>
      </span>
    </div><!-- /input-group -->
  </div>

<div class="form-group">
		<label>Suporte</label>
		<select class="form-control" name="suporte" value="">
			<option value="" >Selecione</option>
			<option value="0" >Não</option>
			<option value="1" >Sim</option>
		</select>
	</div>
	<div class="form-group">
		<label>Status</label>
		<select class="form-control" name="status_imp_id" value="1">
		@foreach ($status as $s)
			<option value="{{$s->status_imp_id}}" >{{$s->nome_status}}</option>
		@endforeach
		</select>
	</div>

  <div class="form-group">
		<label>Observações</label><br>
		<textarea name="observacoes" rows="5" cols="125">{{ old('observacoes') }}</textarea>
	</div>

	<button type="submit" class="btn btn-primary btn-block">Adicionar</button>
@stop