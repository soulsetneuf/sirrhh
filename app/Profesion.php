<?php

namespace sisRRHH;

use Illuminate\Database\Eloquent\Model;

class Profesion extends Model
{
    protected $table="profesiones";
    protected $fillable=["nombre"];
}
