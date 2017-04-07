<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemorandumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    var $nombre_tabla='memorandum';
    public function up()
    {
        Schema::create($this->nombre_tabla, function (Blueprint $table) {
                $table->increments('id');
                $table->string("path");
                $table->integer("tipo_de_memorandum_id")->unsigned();
                $table->foreign('tipo_de_memorandum_id')->references('id')->on('tipos_de_memorandum') ->onDelete('cascade');
                $table->integer("numero_memorandum");
                $table->date('fecha_asignacion');
                $table->date('fecha_designacion');
                $table->integer("numero_tomo");
                $table->string("ubicacion_fisica");
                $table->integer("notificador_id")->unsigned();
                $table->foreign('notificador_id')->references('id')->on('funcionarios') ->onDelete('cascade');
                $table->integer("notificado_id")->unsigned();
                $table->foreign('notificado_id')->references('id')->on('funcionarios') ->onDelete('cascade');
                $table->string("lugar");
                $table->string("motivo");
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
