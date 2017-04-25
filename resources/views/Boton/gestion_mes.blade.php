<center>
    @if(is_null($gestion) && is_null($mes))
        {!!
            link_to_route($ruta_controlador.'.list.pdf',
            $title="Impresion",
            $parameters=["gestion"=>"Todos","mes"=>"Todos"],
            $attributes=["class"=>"btn btn-default"])
        !!}
        {!! link_to_route($ruta_controlador.'.create',$title="Nuevo",$parameters="", $attributes=["class"=>"btn btn-success"])  !!}
    @else
        {!!
            link_to_route($ruta_controlador.'.list.pdf',
            $title="Impresion",
            $parameters=["gestion"=>$gestion,"mes"=>$mes],
            $attributes=["class"=>"btn btn-default"])
        !!}
        {!! link_to_route($ruta_controlador.'.create',$title="Nuevo",$parameters="", $attributes=["class"=>"btn btn-success"])  !!}
    @endif
</center>