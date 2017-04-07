<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratos', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('id_dat');
            $table->string('item');
            $table->string('cargo');
            $table->bigInteger('hab_bas');
            $table->date('fec_ini');
            $table->date('fec_con');
            $table->string('des_ubi');
            $table->string('sec_tra');
            $table->string('tip_fun');
            $table->string('enc_con');
            $table->string('ase_leg');
            $table->longText('obs');
            $table->timestamps();
            $table->foreign('id')->references('id')->on('funcionarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contratos');
    }
}
