@extends('layouts.app')

@section('content')
    <div class="col-lg-12">
        <hr>
        <h2 class="intro-text text-center">Memorandum</h2>
        <hr>
    </div>
    <div class="table table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th colspan="2">Tipo</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($values as $value)
                <tr class="success">
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->tipo }}</td>
                    <td>

                        <div class="btn-group">
                            {!! link_to_route($ruta_controlador.'.edit',$title="Modificar",$parameters=$value->id, $attributes=["class"=>"btn btn-warning btn-xs"])  !!}

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



