<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TagFactory extends Factory
{
    public function definition()
    {
        $name = $this->faker->unique()->word();

        return [
            'id' => $this->faker->uuid(),
            'name' => ucfirst($name),
            'slug' => Str::slug($name),
            'color' => $this->faker->hexColor(),
            'description' => $this->faker->sentence(),
            'posts_count' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
