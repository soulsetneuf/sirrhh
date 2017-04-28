@extends('layouts.app')

@section('content')
    <div class="col-lg-12">
        <hr>
        <h2 class="intro-text text-center">Memorandum</h2>
        <hr>
    </div>


    {!! Form::open(['route' => $ruta_controlador.'.index', 'method' => 'GET']) !!}
    <table class="table">
        <tr>
            <td>CI Notificado</td>
            <td>
                @if(is_null($notificado_id))
                    {!! Form::select('notificado_id',sisRRHH\funcionario::pluck("ci","id"),null,['class' => 'form-control' , 'required' => 'required']) !!}
                @else
                    {!! Form::select('notificado_id',sisRRHH\funcionario::pluck("ci","id"),$notificado_id,['class' => 'form-control' , 'required' => 'required']) !!}
                @endif
            </td>
            <td>Tipo de memorandum</td>
            <td>
                @if(is_null($notificado_id))
                    {!! Form::select('tipo_de_memorandum_id',array_add(sisRRHH\TipoDeMemorandum::pluck("tipo","id"),"Todos","Todos"),"Todos",['class' => 'form-control' , 'required' => 'required']) !!}
                @else
                    {!! Form::select('tipo_de_memorandum_id',array_add(sisRRHH\TipoDeMemorandum::pluck("tipo","id"),"Todos","Todos"),$tipo_de_memorandum_id,['class' => 'form-control' , 'required' => 'required']) !!}
                @endif

            </td>
            <td>
                <button type="submit" class="btn btn-primary">Buscar</button>
            </td>
        </tr>
    </table>
    {!! Form::close() !!}

    <div class="table table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Funcionario</th>
                <th>Tipo de Memorandum</th>
                <th>Ubicacion Fisica</th>
                <th>Fecha Asignacion</th>
                <th>Notificador</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($values as $value)
                <tr class="success">
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->notificado->ci }}</td>
                    <td>{{ $value->memorandum->tipo }}</td>
                    <td>{{ $value->ubicacion_fisica }}</td>
                    <td>{{ $value->fecha_asignacion }}</td>
                    <td>{{ $value->notificador->ci }}</td>
                    <td>
                        <div class="btn-group">
                            {!! link_to_route($ruta_controlador.'.show',$title="Ver",$parameters=$value->id, $attributes=["class"=>"btn btn-success btn-xs"])  !!}

                            {!! link_to_route($ruta_controlador.'.edit',$title="Editar",$parameters=$value->id, $attributes=["class"=>"btn btn-warning btn-xs"])  !!}

                            {!! Form::open(['route' =>[ $ruta_controlador.'.destroy',$value->id], 'method' => 'DELETE']) !!}

                            <input type="submit" value="Eliminar" name="eliminar" class="btn btn-danger btn-xs">
                            {!! Form::close() !!}

                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <center>
        @if(is_null($notificado_id) && is_null($tipo_de_memorandum_id))
            {!! link_to_route($ruta_controlador.'.list.pdf',$title="Impresion",
            $parameters=["notificado_id"=>"Todos","tipo_de_memorandum_id"=>"Todos"],
            $attributes=["class"=>"btn btn-default"])  !!}
        @else
            {!! link_to_route($ruta_controlador.'.list.pdf',$title="Impresion",
            $parameters=["notificado_id"=>$notificado_id,"tipo_de_memorandum_id"=>$tipo_de_memorandum_id],
            $attributes=["class"=>"btn btn-default"])  !!}
        @endif
        {!! link_to_route($ruta_controlador.'.create',$title="Nuevo",$parameters="", $attributes=["class"=>"btn btn-success"])  !!}
    </center>
@endsection