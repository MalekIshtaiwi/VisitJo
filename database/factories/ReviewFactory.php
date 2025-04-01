<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Service;
use App\Models\Review;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Select a unique user-service pair
        do {
            $user = User::inRandomOrder()->first();
            $service = Service::inRandomOrder()->first();
            $exists = Review::where('user_id', $user->id)->where('service_id', $service->id)->exists();
        } while ($exists);

        return [
            'user_id' => $user->id,
            'service_id' => $service->id,
            'rating' => $this->faker->numberBetween(1, 5),
            'comment' => $this->faker->sentence(),
        ];
    }
}
