<?php

namespace sisRRHH;

use Illuminate\Database\Eloquent\Model;

class funretirado extends Model
{
    //
    protected $fillable = [
        	'ci',
            'nom_com',
            'sexo',
            'fec_nac',
            'est_civ',
            'pro_ocu',
            'pais',
            'dep',
            'pro',
            'ciu',
            'dir',
            'n_seg_soc',
            'est_lab',
            'fec_ina',
            'tel_fij',
            'tel_cel',
            'tel_eme',
            'tel_cor',
            'num_lic',
            'cat_lic',
            'fec_fen_lic',
            'cor_per',
            'cor_ins',
            'num_cue',
            'ant_ext'
    ];
}
