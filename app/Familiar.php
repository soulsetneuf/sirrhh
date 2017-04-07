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
		return $this->belongsTo('sisRRHH\funcionario', 'funcionario_id');
	}
}
