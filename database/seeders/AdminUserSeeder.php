<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use Illuminate\Support\Facades\Hash;
use App\Models\User;


class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Saeed Riaz',
            'email' => 'saeed.riaz@hussainenterprises.org',
            'password' => Hash::make('Pakistan@125'), // Change 'password' to your desired password
            'role' => 'admin', // Assuming 'role' is the column for storing user roles
        ]);
    }
}
