<?php
$anio=1980;
$array_gestiones=[];
for ($i=$anio; $i <= \Carbon\Carbon::now()->format('Y'); $i++) { 
  $array_gestiones[$i]=$i;
}

return [
"meses"=>[
    "Enero"=>"Enero",
    "Febrero"=>"Febrero",
    "Marzo"=>"Marzo",
    "Abril"=>"Abril",
    "Mayo"=>"Mayo",
    "Junio"=>"Junio",
    "Julio"=>"Julio",
    "Agosto"=>"Agosto",
    "Septiembre"=>"Septiembre",
    "Octubre"=>"Octubre",
    "Noviembre"=>"Noviembre",
    "Diciembre"=>"Diciembre"
],
"gestiones"=>$array_gestiones,
"expedido"=>[
    "Potosi"=>"Potosi",
    "La Paz"=>"La Paz",
    "Sucre"=>"Sucre",
    "Santa Cruz"=>"Santa Cruz",
    "Cochabamba"=>"Cochabamba",
    "Beni"=>"Beni",
    "Oruro"=>"Oruro",
    "Tarija"=>"Tarija",
    "Pando"=>"Pando"
    ],
"tipo_parentesco"=>[
    "Padre"=>"Padre",
    "Hermano"=>"Hermano",
    "Tio"=>"Tio",
    "Esposa"=>"Esposa",
    "Hijo"=>"Hijo",
    ],
"tipo_subsidio"=>[
    "Prenatal"=>"Prenatal",
    "Lactancia"=>"Lactancia",
    ],
];
