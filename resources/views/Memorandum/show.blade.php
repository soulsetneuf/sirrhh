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
        <h2 class="intro-text text-center">Memorandum</h2>
        <hr>
    </div>
    <div class="form-group">
        <center>
            <div class="col-lg-12">
                <img src='{{ asset("enl_con/".$value->path) }}'
                     alt="No se encontro el archivo" style="width: 200px;height: 200px">
            </div>
        </center>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                {!! Form::label('Tipo de memorandum', 'Tipo de memorandum') !!}:
                {!! Form::label($value->memorandum->tipo) !!}
            </div>
            <div class="col-lg-6">
                {!! Form::label('Numero de memorandum') !!}
                {!! Form::label($value->numero_memorandum) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                {!! Form::label('Fecha asignacion') !!}:
                {!! Form::label($value->fecha_asignacion) !!}
            </div>
            <div class="col-lg-6">
                {!! Form::label('Fecha fin de designacion') !!}:
                {!! Form::label($value->fecha_designacion) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                {!! Form::label('Numero de tomo') !!}:
                {!! Form::label($value->numero_tomo) !!}
            </div>
            <div class="col-lg-6">
                {!! Form::label('Ubicacion fisica') !!}
                {!! Form::label($value->ubicacion_fisica) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                {!! Form::label('Notificador/a') !!}
                {!! Form::label($value->notificador->ci) !!}
            </div>
            <div class="col-lg-6">
                {!! Form::label('Notificado/a') !!}
                {!! Form::label($value->notificado->ci) !!}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                {!! Form::label('Lugar') !!}
                {!! Form::label($value->lugar) !!}
            </div>
            <div class="col-lg-6">
                {!! Form::label('Motivo') !!}
                {!! Form::label($value->motivo) !!}
            </div>
        </div>
    </div>
    <br/>
    <br/>
    @include("Boton.show")
@endsection
