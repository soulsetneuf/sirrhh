<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanillasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planillas', function (Blueprint $table) {
            $table->increments('id');
            $table->string("nombre");
            $table->string("apellido_p");
            $table->integer("CI");
            $table->timestamps();
        });
    }
    /*
    public function sumar($a,$b)
    {
        return $a+$b;
    }
    public function calcu()
    {
        $r=$this->sumar(2,3);
        $r=funcion ($a,$b){
            return $a+$b;
        }
    }
    */
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('planillas');
    }
}
