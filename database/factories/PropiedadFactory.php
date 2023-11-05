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
            'titulo' => fake()->text(10),
            'descripcion' => fake()->text(20),
            'fechaPub' => fake()->date(),
            'habitaciones' => fake()->numberBetween(1, 6),
            'tipoCasa' => fake()->randomElement(['Casa', 'Departamento', 'Casas rodante']),
            'tipoA' => fake()->randomElement(['entero', 'unaHabitacion']),
            'tipoPropiedad' => fake()->randomElement(['Estudiantes', 'Trabajadores', 'Publico general']),
            'ubicacion' => json_encode(['latitud' => fake()->latitude,'longitud' => fake()->longitude,]),        
            'servicios' => json_encode([
                        'wifi' => fake()->boolean,
                        'tv' => fake()->boolean,
                        'gas' => fake()->boolean,
                        'luz' => fake()->boolean,
                        'agua' => fake()->boolean,
                        'lavadora' => fake()->boolean,
                        'aire_acondicionado' => fake()->boolean,
                    ]),

            'precio' => fake()->numberBetween(1000, 10000),
            'imagen' => fake()->city(),
            'edoPropiedad' => fake()->randomElement(['rentada', 'publicada', 'eliminada']),
            'colonia_id' => Colonia::factory()
        ];
    }
}
