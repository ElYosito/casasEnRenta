<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Colonia;
use App\Models\Propiedad;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $colonias = Colonia::factory(10)->create();

        foreach ($colonias as $colonia) {
            Propiedad::factory(4)->create(['colonia_id'=>$colonia->id]);
        }
    }
}
