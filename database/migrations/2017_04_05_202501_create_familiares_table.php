<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamiliaresTable extends Migration
{
/**
     * Run the migrations.
     *
     * @return void
     */
    var $nombre_tabla='familiares';
    public function up()
    {
        Schema::create($this->nombre_tabla, function (Blueprint $table) {
                $table->increments('id');
                $table->integer('funcionario_id')->unsigned();
                $table->foreign('funcionario_id')->references('id')->on("funcionarios")->onDelete("cascade");

                $table->integer('familiar_id')->unsigned();
                $table->foreign('familiar_id')->references('id')->on("personas")->onDelete("cascade");

                $table->string("tipo_parentesco");


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
        Schema::dropIfExists($this->nombre_tabla);
    }
}
