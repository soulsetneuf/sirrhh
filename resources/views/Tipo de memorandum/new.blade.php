@extends('layouts.app')

@section('content')
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
    {!! Form::open(['route' => $ruta_controlador.'.store', 'method' => 'post', 'novalidate']) !!}
    @include($ruta_vista.'.form')
    {!! Form::close() !!}
@endsection