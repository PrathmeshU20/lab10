<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'role_id' => 1,
            'password' => Hash::make('Admin123'),
        ]);
        User::create([
            'name' => 'Prathmesh Urkude',
            'email' => 'prathmesh@email.com',
            'role_id' => 2,
            'password' => Hash::make('prathmesh123'),
        ]);
    }
}
