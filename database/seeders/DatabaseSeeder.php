<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ServiceCategory;
use App\Models\ServiceType;
use App\Models\Service;
use App\Models\User;
use App\Models\Booking;
use App\Models\Review;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Seed the admin user
        $this->call(AdminSeeder::class);
        $this->call(ServiceCategorySeeder::class);
        $this->call(ServiceTypeSeeder::class);

        // Seed categories and types

        // Seed services
        Service::factory(20)->create();

        // Seed users
        User::factory(10)->create();

        // Seed reviews and bookings
        Booking::factory(15)->create();


        $users = User::all();
        $services = Service::all();

        foreach ($users as $user) {
            foreach ($services->random(min(3, $services->count())) as $service) {
                if (!Review::where('user_id', $user->id)->where('service_id', $service->id)->exists()) {
                    Review::factory()->create([
                        'user_id' => $user->id,
                        'service_id' => $service->id,
                    ]);
                }
            }
        }
    }
}
