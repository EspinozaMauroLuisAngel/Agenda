<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\tb_sueldos>
 */
class tb_sueldosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            
            'id_area' => $this->faker->randomElement(['Área A', 'Área B', 'Área C']), 
            'idt_empleado' => $this->faker->randomElement(['Puesto A', 'Puesto B', 'Puesto C']), 
            'sueldo' => $this->faker->randomNumber(4, true),
            'detalle' => $this->faker->asciify('user-****'),
            'activo' => $this->faker->randomElement(['Activo', 'Desactivado']), 

        ];
    }
}
