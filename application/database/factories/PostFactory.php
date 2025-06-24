<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    protected $model = \App\Models\Post::class;

    public function definition()
    {
        $title = $this->faker->unique()->sentence(6, true);

        $statusOptions = ['draft', 'published', 'archived'];

        $status = $this->faker->randomElement($statusOptions);

        return [
            'id' => $this->faker->uuid(),
            'user_id' => null, 
            'title' => $title,
            'slug' => Str::slug($title),
            'excerpt' => $this->faker->text(150),
            'content' => $this->faker->paragraphs(5, true),
            'featured_image_url' => $this->faker->imageUrl(640, 480, 'nature', true),
            'status' => $status,
            'published_at' => $status === 'published' ? $this->faker->dateTimeBetween('-1 years', 'now') : null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
