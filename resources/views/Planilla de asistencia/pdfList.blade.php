<style>
    td {
        text-align: center;
    }

    th {
        text-align: center;
        font-weight: bold;
    }
</style>
<table>
    <tr>
        <td colspan="4"><h2 class="intro-text text-center">Planilla de Asistencia</h2></td>
    </tr>
</table>
<br/>

{{ Form::label("Gestion: $gestion") }}
{{ Form::label("Mes: $mes") }}
<br/>
<br/>
<?php $nro = 0; ?>
<table border="1">
    <thead>
    <tr>
        <th>#</th>
        <th>Gestion</th>
        <th>Mes</th>
        <th>Total en planilla</th>
        <th>Descripcion</th>
        <th>Ubicacion Fisica</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($values as $value)
        <tr>
            <td>{{ $nro=$nro+1 }}</td>
            <td>{{ $value->gestion }}</td>
            <td>{{ $value->mes }}</td>
            <td>{{ $value->total_personal }}</td>
            <td>{{ $value->descripcion }}</td>
            <td>{{ $value->ubicacion_fisica }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
