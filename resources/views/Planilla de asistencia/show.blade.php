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
    <div class="col-lg-12">
        <hr>
        <h2 class="intro-text text-center">Planilla de asistencia</h2>
        <hr>
    </div>
    <br/>
    <div class="form-group">
        <center>
            <div class="col-lg-12">
                <img src='{{ asset("enl_con/".$value->path) }}' alt="No se encontro el archivo"
                     style="width: 200px;height: 200px">
            </div>
        </center>
    </div>
    {{ Form::label(" ") }}
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                {!! Form::label('Total personas en planilla', 'Total personas en planilla') !!}:
                {!! Form::label($value->total_personal) !!}
            </div>
            <div class="col-lg-6">
                {!! Form::label('Descripcion', 'Descripcion') !!}:
                {!! Form::label($value->descripcion) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                {!! Form::label('Mes', 'Mes') !!}:
                {!! Form::label($value->mes) !!}
            </div>
            <div class="col-lg-6">
                {!! Form::label('Gestion', 'Gestion') !!}:
                {!! Form::label($value->gestion) !!}
            </div>
        </div>
    </div>
    @include("Boton.show")
@endsection
