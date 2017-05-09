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
    "estado_laboral"=>[
        "Sin Contrato"=>"Sin Contrato",
        "Activo"=>"Activo",
        "Inactivo"=>"Inactivo",
        "De Vacacion"=>"De Vacacion",
        "Inactivo"=>"Inactivo"

    ],
    "categoria_licencia"=>[
        "S/L"=>"S/L",
        "A"=>"A",
        "B"=>"B",
        "C"=>"C",
        "P"=>"P",
        "M"=>"M",
        "T"=>"T",
    ],
    "profesiones"=>[
        'Abogado'=> 'Abogado',
        'Arquitecto'=> 'Arquitecto',
        'Constructor Civil'=> 'Constructor Civil',
        'Ingeniero AgroIndustrial'=> 'Ingeniero AgroIndustrial',
        'Ingeniero Agronomo'=> 'Ingeniero Agronomo',
        'Ingeniero Ambiental'=> 'Ingeniero Ambiental',
        'Ingeniero Civil'=> 'Ingeniero Civil',
        'Ingeniero Electronico'=> 'Ingeniero Electronico',
        'Ingeniero Minera'=> 'Ingeniero Minera',
        'Ingeniero Industrual'=> 'Ingeniero Industrial',
        'Ingeniero Desarrollo Rural'=> 'Ingeniero Desarrollo Rural',
        'Ingeniero Geologo'=> 'Ingeniero Geologo',
        'Ingeniero Mecatronico'=> 'Ingeniero Mecatronico',
        'Ingeniero de Sistemas'=> 'Ingeniero de Sistemas',
        'Ingeniero Topografo'=> 'Ingeniero Topografo',
        'Licenciado Administracion de Empresas'=> 'Licenciado Administracion de Empresas',
        'Licenciado Contaduria Publica'=> 'Licenciado Contaduria Publica',
        'Licenciado Contabilidad'=> 'Licenciado Contabilidad',
        'Licenciado Economia'=> 'Licenciado Economia',
        'Licenciado Enfermeria'=> 'Licenciado Enfermeria',
        'Licenciado Linguistica'=> 'Licenciado Linguistica',
        'Licenciado Quimica'=> 'Licenciado Quimica',
        'Licenciado Turismo'=> 'Licenciado Turismo',
        'Licenciado Trabajo Social'=> 'Licenciado Trabajo Social',
        'Medico'=> 'Medico',
        'Medico Veterinario Zootecnista'=> 'Medico Veterinario Zootecnista',
        'Odontologo'=> 'Odontologo',
        'Psicologo'=> 'Psicologo',
        'Tecnico Electrisista'=> 'Tecnico Electrisista',
        'Tecnico Mecanico'=> 'Tecnico Mecanico',
        'Secretaria'=> 'Secretaria',
        'Chofer' => 'Chofer'
    ],
    "tipo_promocion"=>[
        "Ascenso"=>"Ascenso",
        "Despido"=>"Despido"
    ],
    "sexo"=>[
        "Masculino"=>"Masculino",
        "Femenino"=>"Femenino"
    ],
    "estado_civil"=>[
        "Casado"=>"Casado",
        "Soltero"=>"Soltero",
        "Divorsiado"=>"Divorsiado",
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
    "departamentos"=>[
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
    "tipo_cuenta"=>[
        "Administrador"=>"Administrador",
        "RRHH"=>"RRHH",
    ],
    "tipo_subsidio"=>[
        "Prenatal"=>"Prenatal",
        "Lactancia"=>"Lactancia",
    ],
    "acensos_decensos"=>[
        "Ascenso"=>"Ascenso",
        "Decenso"=>"Decenso",
        "Mantiene"=>"Mantiene",
        "Despido"=>"Despido",
        "Renuncia"=>"Renuncia",
    ],
];