<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'NamePost' => $this->faker->name,
            'Content' => $this->faker->text,
            'date' => now(),
            'likes' => $this->faker->randomNumber(1, 50),
            'PostImage' => 'images/logo/logo.png',
            'Author' => '1',
            'category_id' => $this->faker->randomNumber(1, 3),
        ];
    }
}
