{!! Form::open(['route' => $ruta_controlador.'.index', 'method' => 'GET']) !!}
<table class="table">
    <tr>
        <td>Gestion</td>
        <td>
            @if(is_null($gestion))
                {!! Form::select('gestion',array_add(config("options.gestiones"),"Todos","Todos"),null,['class' => 'form-control' , 'required' => 'required']) !!}
            @else
                {!! Form::select('gestion',array_add(config("options.gestiones"),"Todos","Todos"),$gestion,['class' => 'form-control' , 'required' => 'required']) !!}
            @endif
        </td>
        <td>
            Mes
        </td>
        <td>
            @if(is_null($mes))
                {!! Form::select('mes',array_add(config("options.meses"),"Todos","Todos"),null,['class' => 'form-control' , 'required' => 'required']) !!}

            @else
                {!! Form::select('mes',array_add(config("options.meses"),"Todos","Todos"),$mes,['class' => 'form-control' , 'required' => 'required']) !!}

            @endif
        </td>
        <td>
            <button type="submit" class="btn btn-primary">Buscar</button>
        </td>
    </tr>
</table>
{!! Form::close() !!}