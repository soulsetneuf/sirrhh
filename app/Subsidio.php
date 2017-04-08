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
    public function funcionario()
    {
        return $this->hasOne('sisRRHH\funcionario', 'id', 'funcionario_id');
    }
    public function familiar()
    {
        return $this->hasOne('sisRRHH\Familiar', 'id', 'familiar_id');
    }
    public function scopeTiposubsidio($query,$tipo_subsidio)
    {
        if($tipo_subsidio!="Todos")
            return $query->where('tipo_subsidio', '=', $tipo_subsidio);
        else
            return $query;
    }
}

