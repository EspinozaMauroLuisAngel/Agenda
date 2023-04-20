<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\tb_relacion_areas>
 */
class tb_relacion_areasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'id_area' => $this->faker->randomElement(['Area A', 'Area B', 'Area C']),
            'id_empleado' => $this->faker->randomElement(['Puesto A', 'Puesto B', 'Puesto C']),   
            'fecha' => $this->faker->date(),
            'activo' => $this->faker->randomElement(['Activo', 'Desactivado']), 

        ];
    }
}
