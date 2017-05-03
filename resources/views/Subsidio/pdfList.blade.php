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
        <td colspan="4"><h2 class="intro-text text-center">Detalle subsidios</h2></td>
    </tr>
</table>
<br/>
@if($tipo_subsidio=="Todos")
    {{ Form::label("Tipo Subsidio: Todos") }}
@else
    {{ Form::label("Tipo Subsidio: $tipo_subsidio") }}
@endif
<br/>
<br/>
<?php $nro = 0; ?>
<table border="1">
    <thead>
    <tr>
        <th rowspan="2" style="vertical-align: middle;text-align: center">Nro</th>
        <th colspan="2" style="text-align: center">Funcionario</th>
        <th colspan="2" style="text-align: center">Beneficiario/a</th>
        <th colspan="2" style="text-align: center">Tipo de subsidio</th>
        <th rowspan="2" style="vertical-align: middle;text-align: center">Total</th>
        <th rowspan="2" style="vertical-align: middle;text-align: center">Fecha</th>
    </tr>
    <tr>
        <th>#</th>
        <th>CI</th>
        <th>Nombre completo</th>
        <th>CI</th>
        <th>Nombre completo</th>
        <th>Prenatal</th>
        <th>Lactancia</th>
    </tr></thead>
    <tbody>
    @foreach ($values as $value)
        <tr>
            <td>{{ $nro=$nro+1 }}</td>
            <td>
                {{ $value->funcionario->ci }}
            </td>
            <td>
                {{ $value->funcionario->nombre_completo }}
            </td>
            <td>{{ $value->familiar->persona->ci}}</td>
            <td>{{ $value->familiar->persona->nombre_completo}}</td>
            <td>
                @if($value->tipo_subsidio=="Prenatal")
                    {{$value->total}} bs
                @endif
            </td>
            <td>
                @if($value->tipo_subsidio=="Lactancia")
                    {{$value->total}} bs
                @endif
            </td>
            <td>
                {{ $value->total }} bs
            </td>
            <td>
                {{ $value->created_at }}
            </td>
        </tr>
    @endforeach
    <tr>
        <th colspan="5"></th>
        <th>Total Prenatal : <br/>{{  $total_prenatal  }} bs</th>
        <th>Total Lactancia : <br/>{{  $total_lactancia  }} bs</th>
        <th>Total : <br/>{{  $total  }} bs</th>
    </tr>
    </tbody>
</table>