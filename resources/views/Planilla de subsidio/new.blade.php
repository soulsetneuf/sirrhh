@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                @if(session()->has('msj'))
				<div class="alert alert-success" role="alert">
				{{ session('msj') }}
				</div>
				@endif
				@if(session()->has('errormsj'))
				<div class="alert alert-danger" role="alert">
				Error al guardar los Datos.
				</div>
				@endif
				 @include('Error.error')	
				 {!! Form::open(['route' => $ruta_controlador.'.store', 'method' => 'post', "files"=>true]) !!}
                  @include($ruta_vista.'.form')
    			 {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection