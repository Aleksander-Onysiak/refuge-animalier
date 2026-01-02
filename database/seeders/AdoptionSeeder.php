<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Adoption;
use Faker\Factory as Faker;

class AdoptionSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        $hours = [
            '08:00 - 10:00',
            '10:00 - 12:00',
            '13:00 - 15:00',
            '15:00 - 18:00',
            '18:00 - 20:00',
        ];

        // Créons 10 entrées d'adoption fictives
        Adoption::create([
            'lastname' => $faker->lastName,
            'firstname' => $faker->firstName,
            'email' => $faker->unique()->safeEmail,
            'phone' => $faker->phoneNumber,
            'animal' => $faker->randomElement(['Moka', 'Luna', 'Charlie', 'Bella']),
            'hours' => $faker->randomElement($hours),
            'message' => $faker->optional()->sentence(10),
        ]);
    }

}
