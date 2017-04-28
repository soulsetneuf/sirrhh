@extends('layouts.app')

@section('content')
    @include("Planilla de sueldo.menu")
    <div class="col-lg-12">
        <hr>
        <h2 class="intro-text text-center">Planillas de sueldos</h2>
        <hr>
    </div>
    @include("Search.gestion_mes")
    <div class="table table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Gestion</th>
                <th>Mes</th>
                <th>Cantidad de personas</th>
                <th>Total en planilla (Bs)</th>
                <th>Ubicacion fisica</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($values as $value)
                <tr class="success">
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->gestion }}</td>
                    <td>{{ $value->mes }}</td>
                    <td>{{ $value->total_personal }}</td>
                    <td>{{ $value->monto_total }}</td>
                    <td>{{ $value->ubicacion_fisica }}</td>
                    <td>
                        @include("Boton.list")
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    @include("Boton.gestion_mes")
@endsection

