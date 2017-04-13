<?php

namespace sisRRHH;

use Illuminate\Database\Eloquent\Model;

class Familiar extends Model
{
	protected $table="familiares";
    protected $fillable=[
    			'funcionario_id'
    			,"familiar_id"
                ,'tipo_parentesco'
                ];
    public function funcionario() {
		return $this->hasOne('sisRRHH\funcionario','id', 'funcionario_id');
	}
    public function persona()
    {
        return $this->hasOne('sisRRHH\Persona', 'id', 'familiar_id');
    }
}
