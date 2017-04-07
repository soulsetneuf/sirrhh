<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{  /**
     * Run the migrations.
     *
     * @return void
     */
    var $nombre_tabla='personas';
    public function up()
    {
        Schema::create($this->nombre_tabla, function (Blueprint $table) {
                $table->increments('id');
                $table->bigInteger('ci');
                $table->string('nombre');
                $table->string('apellido_paterno');
                $table->string('apellido_materno');                
                $table->string('sexo');
                $table->date('fecha_nacimiento');
                $table->string('est_civil');
                $table->string("direccion");
                $table->string("telefono");
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
