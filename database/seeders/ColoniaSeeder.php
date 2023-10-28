<?php

namespace Database\Seeders;

use App\Models\Colonia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColoniaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Colonia::factory(10)->hasPropiedad(4)->create();
    }
}
