<div class="form-group">
    <div class="col-lg-2">
        {{ Html::link(URL::previous(), 'Atras', $attributes=["class"=>"btn btn-default"], true)}}
    </div>
    <div class="col-lg-6">
        {!! link_to_route($ruta_controlador.'.pdf',$title="Imprimir",$parameters=["id"=>$value->id], $attributes=["class"=>"btn btn-default"])  !!}
    </div>
    <div class="col-lg-2">
        {!! link_to_route($ruta_controlador.'.edit',$title="Modificar",$parameters=$value->id, $attributes=["class"=>"btn btn-warning"])  !!}
    </div>
</div>