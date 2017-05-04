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
    <div class="row">
        <div class="form-group">
            <center>
                <div class="col-lg-12">
                    <img src='{{ asset("enl_con/".$value->path) }}'
                         alt="No se encontro el archivo" style="width: 200px;height: 200px">
                </div>
            </center>
        </div>
    </div>
    <br/>
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <h3>1. Datos Relevantes</h3>
                </div>
                <div class="col-md-6">
                    <h3>2. Datos de Ubicación</h3>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-md-3">
                    {!! Form::label('Tipo de memorandum', 'Tipo de memorandum') !!}:
                </div>
                <div class="col-md-3">
                    {!! $value->memorandum->tipo !!}
                </div>

                <div class="col-md-3">
                    {!! Form::label('Numero de memorandum') !!}:
                </div>
                <div class="col-md-3">
                    {!! $value->numero_memorandum !!}
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    {!! Form::label('Notificado/a') !!}:
                </div>
                <div class="col-md-3">
                    {!! $value->notificado->nombre_completo !!}
                </div>
                <div class="col-md-3">
                    {!! Form::label('Ubicacion fisica') !!}:
                </div>
                <div class="col-md-3">
                    {!! $value->ubicacion_fisica !!}
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    {!! Form::label('Notificador/a') !!}:
                </div>
                <div class="col-md-3">
                    Unidad de RRHH
                </div>

                <div class="col-md-3">
                    {!! Form::label('Numero de tomo') !!}:
                </div>
                <div class="col-md-3">
                    {!! $value->numero_tomo !!}
                </div>
                <div class="col-md-6"></div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    {!! Form::label('Lugar') !!}:
                </div>
                <div class="col-md-3">
                    {!! $value->lugar !!}
                </div>
                <div class="col-md-6"></div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    {!! Form::label('Motivo') !!}
                </div>
                <div class="col-md-3">
                    {!! $value->motivo !!}
                </div>
                <div class="col-md-6"></div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    {!! Form::label('Fecha asignacion') !!}:
                </div>
                <div class="col-md-3">
                    {!! $value->fecha_asignacion !!}
                </div>
                <div class="col-md-6"></div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    {!! Form::label('Fecha fin de designacion') !!}:
                </div>
                <div class="col-md-3">
                    {!! $value->fecha_designacion !!}
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>
    </div>
    <br/>
    <br/>
    @include("Boton.show")
@endsection
