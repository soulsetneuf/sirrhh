<?php

namespace sisRRHH;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Planilla extends Authenticatable
{
    protected $table="planillas";
    protected $fillable = ["nombre","apellido_p","CI"];
}
