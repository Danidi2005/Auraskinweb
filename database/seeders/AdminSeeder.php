<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        // This will check if the email exists. 
        // If it does, it updates the record. If not, it creates a new one.
        User::updateOrCreate(
            ['email' => 'admin@auraskin.com'], // The "Check" condition
            [
                'name' => 'AuraSkin Admin',
                'password' => Hash::make('admin123'), // Securely hashed
                'is_admin' => 1,
            ]
        );
    }
}