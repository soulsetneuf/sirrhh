<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanillasDeSueldosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    var $nombre_tabla='planillas_de_sueldos';
    public function up()
    {
        Schema::create($this->nombre_tabla, function (Blueprint $table) {
                $table->increments('id');
                $table->string("path");
                $table->integer("gestion");
                $table->string("mes");
                $table->integer("total_personal");
                $table->integer("monto_total");
                $table->integer("ubicacion_fisica");
                $table->string("descripcion");
                $table->timestamps();//created_at, updated_at
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
