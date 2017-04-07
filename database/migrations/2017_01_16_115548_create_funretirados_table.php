<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFunretiradosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funretirados', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->string('ci');
            $table->string('nom_com');
            $table->string('sexo');
            $table->date('fec_nac');
            $table->string('est_civ');
            $table->string('pro_ocu');
            $table->string('pais');
            $table->string('dep');
            $table->string('pro');
            $table->string('ciu');
            $table->string('dir');
            $table->string('n_seg_soc');
            $table->string('est_lab');
            $table->date('fec_ina');
            $table->string('tel_fij');
            $table->string('tel_cel');
            $table->string('tel_eme');
            $table->string('tel_cor');
            $table->string('num_lic');
            $table->string('cat_lic');
            $table->date('fec_fen_lic');
            $table->string('cor_per');
            $table->string('cor_ins');
            $table->string('num_cue');
            $table->string('ant_ext');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('funretirados');
    }
}
