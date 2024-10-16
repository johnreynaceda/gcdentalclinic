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
            'first_name' => 'Administrator',
            'last_name' => 'siha',
            'age' => 9,
            'gender' => 'ssasa',
            'address' => 'ssasa',
            'contact_number' =>97976979,
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'user_type' => 'admin',
        ]);
        User::create([
            'first_name' => 'Secretary',
            'last_name' => 'siha',
            'age' => 9,
            'gender' => 'ssasa',
            'address' => 'ssasa',
            'contact_number' =>97976979,
            'email' => 'secretary@gmail.com',
            'password' => bcrypt('password'),
            'user_type' => 'secretary',
        ]);



        User::create([
            'first_name' => 'patient',
            'last_name' => 'siha',
            'age' => 9,
            'patient_id' => 001,
            'gender' => 'ssasa',
            'address' => 'ssasa',
            'contact_number' =>97976979,
            'email' => 'patient@gmail.com',
            'password' => bcrypt('password'),
            'user_type' => 'patient',
        ]);

    }
}
