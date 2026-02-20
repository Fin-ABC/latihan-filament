<?php

namespace Database\Factories;

use App\Models\major;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'nis' => fake()->unique()->nik(),
            'date_of_birth' => fake()->date(),
            'major' => major::factory(),
            'address' => fake()->sentences(),
            'gender' => fake()->randomElement(['l', 'p']),
        ];
    }
}
