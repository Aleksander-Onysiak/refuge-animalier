<?php

namespace Database\Seeders;

use App\Models\Notification;

class NotificationSeeder
{
    public function run(): void
    {
        Notification::create([
            'date' => '2025-09-05',
            'time' => '12:00',
            'destinator' => 'Elise',
            'content' => '',
            'read_at' => null,
            'created_at' => now()
        ]);
    }
}
