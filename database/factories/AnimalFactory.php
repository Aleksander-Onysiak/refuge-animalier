<?php

namespace Database\Factories;

use App\Models\Animal;
use Illuminate\Database\Eloquent\Factories\Factory;

class AnimalFactory extends Factory
{
    protected $model = Animal::class;

    public function definition(): array
    {
        $types = ['Chat', 'Chien', 'Lapin', 'Perroquet'];
        $sexes = ['Mâle', 'Femelle'];
        $statuses = ['Disponible', 'Soins', 'Adoption'];
        $colors = ['Brun', 'Blanc', 'Noir', 'Gris'];

        return [
            'name' => $this->faker->firstName(),
            'sex' => $this->faker->randomElement($sexes),
            'type' => $this->faker->randomElement($types),
            'race' => $this->faker->word(),
            'status' => $this->faker->randomElement($statuses),
            'color' => $this->faker->randomElement($colors),
            'age' => $this->faker->numberBetween(1, 15),
            'date_of_arrival' => now(),
            'date_of_adoption' => null,
            'image' => 'https://placedog.net/200/200',
            'created_at' => now(),
        ];
    }
}
