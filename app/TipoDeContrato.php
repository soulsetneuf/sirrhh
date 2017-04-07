<?php

namespace sisRRHH;

use Illuminate\Database\Eloquent\Model;

class TipoDeContrato extends Model
{
    protected $table="tipos_de_contratos";
    protected $fillable=["tipo"];
}
