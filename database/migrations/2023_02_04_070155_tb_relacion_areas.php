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
        Schema::create('tb_relacion_areas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_area');
            $table->string('id_empleado');
            $table->date('fecha');
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
