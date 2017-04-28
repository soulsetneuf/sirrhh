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
        <td colspan="4"><h2 class="intro-text text-center">Funcionarios</h2></td>
    </tr>
</table>
<br/>
@if($funcionario_id=="Todos")
    {{ Form::label("CI: Todos") }}
@else
    {{ Form::label("CI: ".\sisRRHH\funcionario::find($funcionario_id)->ci) }}
@endif
@if($tipo_de_contrato_id=="Todos")
    {{ Form::label("Tipo de contrato: Todos") }}
@else
    {{ Form::label("Tipo de contrato".\sisRRHH\TipoDeContrato::find($tipo_de_contrato_id)->tipo) }}
@endif
<br/>
<br/>
<?php $nro = 0; ?>
<table border="1">
    <thead>
    <tr>
        <th>#</th>
        <th>CI</th>
        <th>Nombre completo</th>
        <th>Tipo de funcionario</th>
        <th>Fecha Inicio</th>
        <th>Fecha Fin</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($values as $value)
        <tr>
            <td>{{ $nro=$nro+1 }}</td>
            <td>{{ $value->funcionario->ci }}</td>
            <td>{{ $value->funcionario->nombre_completo }}</td>
            <td>{{ $value->tipo_funcionario->tipo }}</td>
            <td>{{ $value->fecha_inicio }}</td>
            <td>{{ $value->fecha_fin }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
