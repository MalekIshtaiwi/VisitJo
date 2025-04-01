<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ServiceCategory;
use App\Models\ServiceType;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $serviceCategory = ServiceCategory::inRandomOrder()->first();
        $serviceType = ServiceType::inRandomOrder()->first();

        // If no category or type found, fallback to ID 1 (adjust as needed)
        return [
            'service_category_id' => $serviceCategory ? $serviceCategory->id : 1, // Default to ID 1 if no category is found
            'service_type_id' => $serviceType ? $serviceType->id : 1, // Default to ID 1 if no type is found
            'name' => $this->faker->word(),
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->randomFloat(2, 10, 500),
            'start_datetime' => $this->faker->dateTimeBetween('+1 days', '+30 days'),
            'end_datetime' => $this->faker->dateTimeBetween('+31 days', '+60 days'),
            'location' => $this->faker->city(),
            'total_available_seats' => $this->faker->numberBetween(10, 100),
            'image_path' => 'default.jpg',
        ];
    }
}
