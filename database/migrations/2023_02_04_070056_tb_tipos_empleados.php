<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_tipos_empleados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('clave');
            $table->string('nombre');
            $table->string('detalle');
            $table->string('activo');

            $table->timestamps(0);	
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};