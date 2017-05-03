@extends('layouts.app')

@section('content')
    <div class="col-lg-12">
        <hr>
        <h2 class="intro-text text-center">Personas</h2>
        <hr>
    </div>

    <div class="table table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>CI</th>
                <th>fecha_nacimiento</th>
                <th>Direccion</th>
                <th>Telefono</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($values as $value)
                <tr class="success">
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->nombre_completo }}</td>
                    <td>{{ $value->ci }}</td>
                    <td>{{ $value->fecha_nacimiento }}</td>
                    <td>{{ $value->direccion }}</td>
                    <td>{{ $value->telefono }}</td>
                    <td>
                        @include("Boton.list")
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