@extends('layouts.app')

@section('content')
    <div class="col-lg-12">
        <hr>
        <h2 class="intro-text text-center">Familiares</h2>
        <hr>
    </div>


    {!! Form::open(['route' => $ruta_controlador.'.index', 'method' => 'GET']) !!}
    <table class="table">
        <tr>
            <td>Funcionario CI</td>
            <td>
                @if(is_null($funcionario_id))
                    {!! Form::select('funcionario_id',sisRRHH\funcionario::pluck("ci","id"),null,['class' => 'form-control' , 'required' => 'required']) !!}
                @else
                    {!! Form::select('funcionario_id',sisRRHH\funcionario::pluck("ci","id"),$funcionario_id,['class' => 'form-control' , 'required' => 'required']) !!}
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
                <th>Familiar</th>
                <th>Grado de parentesco</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($values as $value)
                <tr class="success">
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->funcionario->ci }}</td>
                    <td>{{ $value->persona->ci }}</td>
                    <td>{{ $value->tipo_parentesco }}</td>
                    <td>

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
        {!! link_to_route($ruta_controlador.'.create',$title="Nuevo",$parameters="", $attributes=["class"=>"btn btn-success"])  !!}
    </center>
@endsection
