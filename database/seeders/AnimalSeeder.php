<?php

namespace Database\Seeders;

use App\Models\Animal;
use Illuminate\Database\Seeder;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Animal::create([
            'name' => 'Moka',
            'sex' => 'Mâle',
            'type' => 'Chien',
            'race' => 'Beagle',
            'status' => 'Disponible',
            'color' => 'Brun',
            'age' => 3,
            'image' => 'dogs/max.jpg',
            'date_of_arrival' => now(),
            'date_of_adoption' => null,
            'created_at' => now()
        ]);
    }
}
