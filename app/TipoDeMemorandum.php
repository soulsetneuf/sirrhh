<?php

namespace sisRRHH;

use Illuminate\Database\Eloquent\Model;

class TipoDeMemorandum extends Model
{
	protected $table="tipos_de_memorandum";
    protected $fillable=["tipo"];
}
