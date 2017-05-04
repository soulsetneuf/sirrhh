<style>
    td
    {
        text-align: center;
    }
    th{
        text-align: center;
        font-weight: bold;
    }
</style>
<table>
    <tr>
        <td colspan="4"><h1 class="intro-text text-center">Promociones</h1></td>
    </tr>
</table>
<br/>
<br/>
        <label>
            @if($tipo_promocion=="Todos")
                Tipo de contrato: Todos
            @else
                @if($tipo_promocion=="Ninguno")
                    Tipo de contrato: Ninguno
                @else
                    Tipo de contrato: {{ \sisRRHH\TipoDeContrato::find($tipo_promocion)->tipo  }}
                @endif
            @endif
        </label>
        <label>
            @if($tipo_promocion=="Todos")
                 Tipo de memorandum: Todos
            @else
                @if($tipo_promocion=="Ninguno")
                    Tipo de memorandum: Ninguno
                @else|
                    Tipo de contrato: {{ \sisRRHH\TipoDeMemorandum::find($tipo_memorandum)->tipo  }}
                @endif
            @endif
        </label>
        <label>
            Fecha Inicio: {{ substr($fecha_inicio,0,10) }}
        </label>
        <label>
            Fecha Fin: {{ substr($fecha_fin,0,10) }}
        </label>
<br/>
<br/>
                        <?php $nro=0; ?>
                            <table border="1">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>CI</th>
                                    <th>Nombre completo</th>
                                    <th>Tipo de archivo</th>
                                    <th>Tipo de promocion</th>
                                    <th>Fecha inicio</th>
                                    <th>Fecha fin</th>
                                    <th>Dias trabajados</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $total=0; ?>
                                @foreach ($promociones as $value)
                                    <tr>
                                        <td class="center">{{ $nro=$nro+1 }}</td>
                                        <td>{{ $value->funcionario->ci }}</td>
                                        <td>{{ $value->funcionario->nombre_completo }}</td>
                                        <td>{{ "Contrato" }}</td>
                                        <td>{{ $value->tipo_promocion }}</td>
                                        <td>{{ $value->fecha_inicio }}</td>
                                        <td>{{ $value->fecha_fin }}</td>
                                        <td>
                                            {{ $dias_trabajados=$value->diasTrabajados($value->fecha_inicio,$value->fecha_fin)  }}
                                        </td>
                                        <?php $total=$total+$dias_trabajados; ?>
                                    </tr>
                                @endforeach
                                @foreach ($memorandum as $value)
                                    <tr>
                                        <td style="padding: 10px">{{ $nro=$nro+1 }}</td>
                                        <td>{{ $value->notificado->ci }}</td>
                                        <td>{{ $value->notificado->nombre_completo }}</td>
                                        <td>{{ "Memorandum" }}</td>
                                        <td>{{ $value->memorandum->tipo }}</td>
                                        <td>{{ $value->fecha_asignacion }}</td>
                                        <td>{{ $value->fecha_designacion }}</td>
                                        <td>
                                            {{ $dias_trabajados=$value->diasTrabajados($value->fecha_asignacion,$value->fecha_designacion)  }}
                                        </td>
                                        <?php $total=$total+$dias_trabajados; ?>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td colspan="7" style="text-align: right">
                                        Total dias trabajados:
                                    </td>
                                    <td>
                                        {{ $total }} dias
                                    </td>
                                </tr>
                                </tbody>
                            </table>