<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $labels = ['house', 'office'];

        return [
            'user_id' => fake()->randomNumber(1, true),
            'name' => fake()->randomElement($labels),
            'address' => fake()->address()
        ];
    }
}
