<?php

namespace Database\Seeders;

use App\Models\Animal;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = Faker::create();

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

        Animal::factory()->count(30)->create();

        //Elise
        User::create([
            'name' => 'Elise',
            'email' => 'elise@refuge.com',
            'password' => Hash::make('password123'), // mot de passe à changer
            'role' => 'admin', // rôle admin
        ]);

        // Bénévoles
        User::create([
            'name' => 'Bénévole',
            'email' => 'benevole@refuge.com',
            'password' => Hash::make('password123'), // mot de passe à changer
            'role' => 'volunteer', // rôle modérateur
        ]);
    }
}
