<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = User::factory(10)->create();

        $tags = Tag::factory(20)->create();

        $posts = Post::factory(50)
            ->make()
            ->each(function ($post) use ($users) {
                $post->user_id = $users->random()->id;
                $post->save();
            });

        foreach ($posts as $post) {
            $randomTags = $tags->random(rand(1, 5));
            $post->tags()->attach($randomTags->pluck('id')->toArray());
        }
    }
}
