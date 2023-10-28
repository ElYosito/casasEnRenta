<?php

namespace Database\Seeders;

use App\Models\Propiedad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropiedadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Propiedad::factory(10)->hascolonia(4)->create();
    }
}
