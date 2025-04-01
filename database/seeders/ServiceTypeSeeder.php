<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ServiceType;
use App\Models\ServiceCategory;

class ServiceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            foreach (['historical', 'wellness', 'adventure', 'relaxation', 'religious'] as $type) {
                    ServiceType::create([
                        'name' => $type,
                        'description' => "A wonderful $type trip experience",
                    ]);
            }
    }
}
