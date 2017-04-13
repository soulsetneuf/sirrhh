<div class="btn-group">
    {!! link_to_route($ruta_controlador.'.show',$title="Ver",$parameters=$value->id, $attributes=["class"=>"btn btn-success btn-xs"])  !!}

    {!! link_to_route($ruta_controlador.'.edit',$title="Modificar",$parameters=$value->id, $attributes=["class"=>"btn btn-warning btn-xs"])  !!}

    {!! Form::open(['route' =>[ $ruta_controlador.'.destroy',$value->id], 'method' => 'DELETE']) !!}

    <input type="submit" value="Eliminar" name="eliminar" class="btn btn-danger btn-xs">
    {!! Form::close() !!}
</div>