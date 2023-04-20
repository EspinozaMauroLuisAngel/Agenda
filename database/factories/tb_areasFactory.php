<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\tb_areas>
 */
class tb_areasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            
            'clave' => $this->faker->regexify('[A-Z]{5}[0-4]{3}'),
            'nombre' => $this->faker->name(),
            'detalle' => $this->faker->asciify('user-****'),
            'activo' => $this->faker->randomElement(['Activo', 'Desactivado']),  
            
        ];
    }
}
