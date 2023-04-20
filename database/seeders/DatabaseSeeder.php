<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\tb_areas::factory(10)->create();
        \App\Models\tb_empleados::factory(10)->create();
        \App\Models\tb_relacion_areas::factory(10)->create();
        \App\Models\tb_sueldos::factory(10)->create();
        \App\Models\tb_tipos_empleados::factory(10)->create();

    }
}
