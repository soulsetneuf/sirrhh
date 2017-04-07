<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCargosTable extends Migration
{
     /**
     * Run the migrations.
     *
     * @return void
     */
    var $nombre_tabla='cargos';
    public function up()
    {
        Schema::create($this->nombre_tabla, function (Blueprint $table) {
                $table->increments('id');
                $table->string("nombre");
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
