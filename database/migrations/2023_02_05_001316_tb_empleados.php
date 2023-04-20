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
        Schema::create('tb_empleados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('clave');
            $table->string('nombre');
            $table->string('app');
            $table->string('apm');
            $table->string('gen');
            $table->date('fn');
            $table->string('email');
            $table->string('pass');
            $table->string('foto');
            $table->string('idt_empleado')->nullable(); 
            $table->string('activo');
            $table->string('sueldo');


            $table->unsignedInteger('sueldos')->nullable();              
            $table->foreign('sueldos')->references('id')->on('tb_sueldos');

            $table->unsignedInteger('areas')->nullable();              
            $table->foreign('areas')->references('id')->on('tb_areas');

            $table->unsignedInteger('relacion_areas')->nullable();              
            $table->foreign('relacion_areas')->references('id')->on('tb_relacion_areas');

            $table->unsignedInteger('tipo_empleados')->nullable();              
            $table->foreign('tipo_empleados')->references('id')->on('tb_tipos_empleados');

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
