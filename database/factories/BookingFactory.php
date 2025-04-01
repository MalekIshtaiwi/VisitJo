<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Service;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id ?? User::factory(),
            'service_id' => Service::inRandomOrder()->first()->id ?? Service::factory(),
            'quantity' => $this->faker->numberBetween(1, 5),
            'price_at_booking' => $this->faker->randomFloat(2, 10, 500),
            'status' => 'pending',
            'payment_method' => $this->faker->randomElement(['credit_card', 'paypal', 'cash']),
            'payment_status' => 'pending',
            'transaction_id' => $this->faker->unique()->uuid(),
        ];
    }
}
