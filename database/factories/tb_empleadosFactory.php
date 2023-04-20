<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\tb_areas;
use App\Models\tb_empleados;
use App\Models\tb_relacion_areas;
use App\Models\tb_sueldos;
use App\Models\tb_tipos_empleados;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\tb_empleados>
 */
class tb_empleadosFactory extends Factory
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
            'app' => $this->faker->lastName(),
            'apm' => $this->faker->lastName(),
            'gen' => $this->faker->randomElement(['masculino', 'femenino']),
            'fn' => $this->faker->date(),
            'email' => $this->faker->email(),
            'pass' => $this->faker->password(),
            'foto' => $this->faker->imageUrl(),
            'idt_empleado' => $this->faker->regexify('[A-Z]{5}[0-4]{3}'),
            'activo' => $this->faker->randomElement(['Activo', 'Desactivado']),
            'sueldo' => $this->faker->randomNumber(4, true),

            'sueldos' => tb_sueldos::inRandomOrder()->first(),
            'areas' => tb_areas::inRandomOrder()->first(),
            'relacion_areas' => tb_relacion_areas::inRandomOrder()->first(),
            'tipo_empleados' => tb_tipos_empleados::inRandomOrder()->first(),




        ];
    }
}
