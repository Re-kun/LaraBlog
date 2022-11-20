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
    public function definition()
    {
        return [
            "user_id" => 1,
            "category_id" => mt_rand(1,3),
            "title" => $this->faker->sentence(),
            "slug" => $this->faker->unique()->sentence(),
            "body" => $this->faker->sentence(),
        ];
    }
}
