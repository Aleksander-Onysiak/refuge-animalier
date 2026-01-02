<?php

namespace Database\Factories;

use App\Models\Adoption;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Adoption>
 */
class AdoptionFactory extends Factory
{
    protected $model = Adoption::class;

    public function definition(): array
    {

        $hours = [
            '08:00 - 10:00',
            '10:00 - 12:00',
            '13:00 - 15:00',
            '15:00 - 18:00',
            '18:00 - 20:00',
        ];

        return [
            'lastname' => $this->faker->lastName(),
            'firstname' => $this->faker->firstName(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'animal' => $this->faker->randomElement(['Moka', 'Luna', 'Bella', 'Charlie']),
            'hours' => $this->faker->randomElement($hours),
            'message' => $this->faker->optional()->paragraph(),
        ];
    }
}
