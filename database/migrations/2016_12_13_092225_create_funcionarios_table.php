<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
    */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('ci');
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
            $table->bigInteger('n_seg_soc');
            $table->string('est_lab');
            $table->date('fec_ina');
            $table->string('tel_fij');
            $table->string('tel_cel');
            $table->bigInteger('num_lic');
            $table->string('cat_lic');
            $table->date('fec_fen_lic');
            $table->string('cor_per');
            $table->string('cor_ins');
            $table->bigInteger('num_cue');
            $table->string('ant_ext');
            $table->string("cargo");

            $table->integer('tipo_funcionario_id')->unsigned();
            $table->foreign('tipo_funcionario_id')->references('id')->on('tipos_funcionarios') ->onDelete('cascade');

            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return vo$id
     */
    public function down()
    {
        Schema::dropIfExists('funcionarios');
    }
}