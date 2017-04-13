<?php

namespace sisRRHH;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table="personas";
    protected $fillable=[
    			'nombre'
    			,"ci"
                ,'apellido_paterno'
                ,'apellido_materno'                
                ,'sexo'
                ,'fecha_nacimiento'
                ,'est_civil'
                ,"direccion"
                ,"telefono"
                ];
    public function getNombreCompletoAttribute(){
        return $this->nombre." ".$this->apellido_paterno." ".$this->apellido_materno;
    }
}
