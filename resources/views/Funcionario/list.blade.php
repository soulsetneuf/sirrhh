@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    <div class="panel-body">
                        <div class="col-lg-12">
                            <hr>
                            <h2 class="intro-text text-center">Funcionarios</h2>
                            <hr>
                        </div>
                        {!! Form::open(['route' => $ruta_controlador.'.index', 'method' => 'GET']) !!}
                        <table class="table">
                            <tr>
                                <td>CI</td>
                                <td>
                                    @if(!(is_null($funcionario_id)))
                                        {!! Form::select('funcionario_id',array_add(sisRRHH\funcionario::pluck("ci","id"),"Todos","Todos"),$funcionario_id,['class' => 'form-control' , 'required' => 'required']) !!}
                                    @else
                                        {!! Form::select('funcionario_id',array_add(sisRRHH\funcionario::pluck("ci","id"),"Todos","Todos"),"Todos",['class' => 'form-control' , 'required' => 'required']) !!}
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
                                    <th>CI</th>
                                    <th>Nombre completo</th>
                                    <th>Ocupacion</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($values as $value)
                                    <tr class="success">
                                        <td>{{ $value->id }}</td>
                                        <td>{{ $value->ci }}</td>
                                        <td>{{ $value->nombre_completo }}</td>
                                        <td>{{ $value->pro_ocu }}</td>
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
                                    <tr>
                                        <td colspan="4">
                                            {!! link_to_route('memorandum.index',$title="Memorandum",
                                                $parameters=["notificado_id"=>$value->id,"tipo_de_memorandum_id"=>"Todos"],
                                                $attributes="")  !!}
                                            {!! link_to_route("funcionario_contratos.index",$title="Contratos",
                                            $parameters=["funcionario_id"=>$value->id,"tipo_de_contrato_id"=>"Todos"],
                                            $attributes="")  !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <center>
                            @if(is_null($funcionario_id))
                                {!! link_to_route($ruta_controlador.'.list.pdf',$title="Impresion",
                                $parameters=["funcionario_id"=>"Todos"],
                                $attributes=["class"=>"btn btn-default"])  !!}
                            @else
                                {!! link_to_route($ruta_controlador.'.list.pdf',$title="Impresion",
                                $parameters=["funcionario_id"=>$funcionario_id],
                                $attributes=["class"=>"btn btn-default"])  !!}
                            @endif
                            {!! link_to_route($ruta_controlador.'.create',$title="Nuevo",$parameters="", $attributes=["class"=>"btn btn-success"])  !!}
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection