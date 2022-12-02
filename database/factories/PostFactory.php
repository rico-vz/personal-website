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
     ** @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'slug' => $this->faker->slug,
            'url' => $this->faker->url,
            'cover_image' => $this->faker->imageUrl,
            'read_time_in_minutes' => $this->faker->numberBetween(1, 10),
            'published_timestamp' => $this->faker->dateTime,
            'comment_count' => $this->faker->numberBetween(0, 100),
        ];
    }
}