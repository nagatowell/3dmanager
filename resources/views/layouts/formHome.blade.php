@extends('layouts.app')
@section('content')
<div class="container">

      
                <div class="panel-body">
                    @yield('form')
                    <div class="form-group">
	                    <br>
	                    <a href="{{ URL::previous() }}" class="btn btn-default">Voltar</a>
                    </div>
                </div>

</div>
@endsection
