<?php

namespace sisRRHH;

use Illuminate\Database\Eloquent\Model;

class Subsidio extends Model
{
    protected $table="subsidios";
    protected $fillable=[
    			'funcionario_id'
    			,"familiar_id"
				,"tipo_subsidio"
                ,"monto"
                ,"total"
                ,"numero_asignacion"
                ,"observaciones"
                ];
}

