<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Provider\es_ES\Address as FakerAddress;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Colonia>
 */
class ColoniaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombreColonia'=>fake()->city(),
            'asentamiento'=>fake()->city(),
            'cp'=>fake()->postcode(),
            'zona'=>fake()->randomElement(['rural','urbana'])
        ];
    }
}
