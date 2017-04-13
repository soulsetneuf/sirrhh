<?php

namespace sisRRHH;

use Illuminate\Database\Eloquent\Model;
use sisRRHH\Familiar;

class funcionario extends Model
{
    // 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table="funcionarios";
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
    public function familiares() {
        return $this->hasMany('sisRRHH\Familiar');
    }
    public function getNombreCompletoAttribute(){
        return $this->nom_com;
    }
}