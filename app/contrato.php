<?php

namespace sisRRHH;

use Illuminate\Database\Eloquent\Model;

class contrato extends Model
{
    protected $fillable = [
        	'id',
            'id_dat',
            'item',
            'cargo',
            'hab_bas',
            'fec_ini',
            'fec_con',
            'des_ubi',
            'sec_tra',
            'tip_fun',
            'enc_con',
            'ase_leg',
            'obs',
            'enl_con'
    ];
}
