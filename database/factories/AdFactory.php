<?php

namespace Database\Factories;

use App\Models\Branch;
use App\Models\Status;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ad>
 */
class AdFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->name(),
            'description' => fake()->text(),
            'user_id' => User::factory(),
            'status_id' => Status::factory(),
            'branch_id' => Branch::factory(),
            'address' => fake()->address(),
            'price' => fake()->numberBetween(),
            'rooms' => fake()->numberBetween(),
            'gender' => fake()->randomElement(['male', 'female']),
            'created_at' => fake()->time(),
            'updated_at' => fake()->time(),
        ];
    }
}
