<?php

namespace Database\Factories;

use App\Models\Notification;
use Illuminate\Database\Eloquent\Factories\Factory;

class NotificationFactory extends Factory
{
    protected $model = Notification::class;

    public function definition(): array
    {
        $destinators = ['Elise', 'Thomas'];

        return [
            'date' => $this->faker->date(),
            'time' => now(),
            'destinator' => $this->faker->randomElement($destinators),
            'content' => $this->faker->word(),
            'read_at' => null,
            'created_at' => now(),
        ];
    }
}
