<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
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
