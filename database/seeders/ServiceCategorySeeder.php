<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ServiceCategory;

class ServiceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ServiceCategory::create([
            'name' => 'trip',
            'description' => 'A category for trips.'
        ]);

        ServiceCategory::create([
            'name' => 'event',
            'description' => 'A category for events.'
        ]);
    }
}
