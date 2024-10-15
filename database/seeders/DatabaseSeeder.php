<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'user_type' => 'admin',
        ]);
        User::create([
            'name' => 'Secretary',
            'email' => 'secretary@gmail.com',
            'password' => bcrypt('password'),
            'user_type' => 'secretary',
        ]);

      

        User::create([
            'name' => 'patient',
            'email' => 'patient@gmail.com',
            'password' => bcrypt('password'),
            'user_type' => 'patient',
        ]);
        
    }
}
