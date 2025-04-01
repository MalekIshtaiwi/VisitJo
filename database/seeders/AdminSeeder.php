<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@visitjo.com',
            'password' => bcrypt('password123'), // Change this to a secure password
            'role' => 'super_admin',
        ]);

        Admin::create([
            'name' => 'Normal Admin',
            'email' => 'admin@visitjo.com',
            'password' => bcrypt('password123'),
            'role' => 'admin',
        ]);
    }
}
