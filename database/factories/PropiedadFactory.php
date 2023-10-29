<?php

namespace Database\Factories;

use App\Models\Colonia;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Propiedad>
 */
class PropiedadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo'=>fake()->text(10),
            'descripcion'=>fake()->text(20),
            'precio'=>fake()->numberBetween(1000, 10000),
            'imagen'=>fake()->city(),
            'fechaPub'=>fake()->date(),
            'edoPropiedad'=>fake()->randomElement(['rentada','publicada','eliminada']),
            'tipoPropiedad'=>fake()->randomElement(['Estudiantes','Trabajadores','Publico general']),
            'habitaciones'=>fake()->numberBetween(1,6),
            'colonia_id'=>Colonia::factory()
        ];
    }
}
