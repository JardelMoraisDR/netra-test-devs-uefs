<?php

use App\Models\Tag;
use App\Models\Post;
use App\Models\User;

use Laravel\Sanctum\Sanctum;

describe('Tag API', function () {
    
    beforeEach(function () {
        $this->user = User::factory()->create();
    });

    describe('GET /api/tags (Index)', function () {
        
        it('can list all tags without authentication', function () {
            Tag::factory()->count(5)->create();

            $response = $this->getJson('/api/tags');

            $response->assertStatus(200)
                ->assertJsonStructure([
                    'data' => [
                        '*' => [
                            'id',
                            'name',
                            'slug',
                            'color',
                            'description',
                            'created_at',
                            'updated_at',
                            'posts_count'
                        ]
                    ]
                ]);

            expect($response->json('data'))->toHaveCount(5);
        });

        it('can list tags with pagination', function () {
            Tag::factory()->count(20)->create();

            $response = $this->getJson('/api/tags?per_page=5');

            $response->assertStatus(200);
            expect($response->json('data'))->toHaveCount(5);
        });

        it('can list all tags without pagination', function () {
            Tag::factory()->count(10)->create();

            $response = $this->getJson('/api/tags?all=true');

            $response->assertStatus(200);
            expect($response->json('data'))->toHaveCount(10);
        });

    });

    describe('POST /api/tags (Store)', function () {
        
        it('can create tag with authentication', function () {
            Sanctum::actingAs($this->user);

            $tagData = [
                'name' => 'Laravel',
                'color' => '#FF6B6B',
                'description' => 'Posts about Laravel framework'
            ];

            $response = $this->postJson('/api/tags', $tagData);

            $response->assertStatus(201)
                ->assertJsonStructure([
                    'data' => [
                        'id',
                        'name',
                        'slug',
                        'color',
                        'description',
                        'created_at',
                        'updated_at'
                    ]
                ])
                ->assertJson([
                    'data' => [
                        'name' => 'Laravel',
                        'slug' => 'laravel',
                        'color' => '#FF6B6B',
                        'description' => 'Posts about Laravel framework'
                    ]
                ]);

            $this->assertDatabaseHas('tags', [
                'name' => 'Laravel',
                'slug' => 'laravel'
            ]);
        });

        it('generates slug automatically from name', function () {
            Sanctum::actingAs($this->user);

            $tagData = [
                'name' => 'React Native Development',
                'description' => 'Posts about React Native development',
                'color' => '#61DAFB'
            ];

            $response = $this->postJson('/api/tags', $tagData);

            $response->assertStatus(201)
                ->assertJson([
                    'data' => [
                        'slug' => 'react-native-development'
                    ]
                ]);
        });

        it('can use custom slug', function () {
            Sanctum::actingAs($this->user);

            $tagData = [
                'name' => 'JavaScript',
                'description' => 'Posts about JavaScript programming language',
                'color' => '#F7DF1E',
                'slug' => 'js'
            ];

            $response = $this->postJson('/api/tags', $tagData);

            $response->assertStatus(201)
                ->assertJson([
                    'data' => [
                        'slug' => 'js'
                    ]
                ]);
        });

        it('cannot create tag without authentication', function () {
            $tagData = ['name' => 'Test Tag'];

            $response = $this->postJson('/api/tags', $tagData);

            $response->assertStatus(401);
        });

        it('validates required name field', function () {
            Sanctum::actingAs($this->user);

            $response = $this->postJson('/api/tags', []);

            $response->assertStatus(422)
                ->assertJsonValidationErrors(['name']);
        });

        it('validates unique name', function () {
            Sanctum::actingAs($this->user);

            Tag::factory()->create(['name' => 'Existing Tag']);

            $tagData = ['name' => 'Existing Tag'];

            $response = $this->postJson('/api/tags', $tagData);

            $response->assertStatus(422)
                ->assertJsonValidationErrors(['name']);
        });

        it('validates color format', function () {
            Sanctum::actingAs($this->user);

            $tagData = [
                'name' => 'Test Tag',
                'color' => 'invalid-color'
            ];

            $response = $this->postJson('/api/tags', $tagData);

            $response->assertStatus(422)
                ->assertJsonValidationErrors(['color']);
        });

        it('accepts valid hex color', function () {
            Sanctum::actingAs($this->user);

            $tagData = [
                'name' => 'Test Tag',
                'description' => 'This is a test tag.',
                'color' => '#FF6B6B'
            ];

            $response = $this->postJson('/api/tags', $tagData);

            $response->assertStatus(201)
                ->assertJson([
                    'data' => [
                        'color' => '#FF6B6B'
                    ]
                ]);
        });

    });

    describe('GET /api/tags/{tag} (Show)', function () {
        
        it('can show tag by id', function () {
            $tag = Tag::factory()->create();

            $response = $this->getJson("/api/tags/{$tag->id}");

            $response->assertStatus(200)
                ->assertJson([
                    'data' => [
                        'id' => $tag->id,
                        'name' => $tag->name,
                        'slug' => $tag->slug
                    ]
                ]);
        });

    });

    describe('PUT /api/tags/{tag} (Update)', function () {
        
        it('can update tag with authentication', function () {
            Sanctum::actingAs($this->user);

            $tag = Tag::factory()->create();
            $updateData = [
                'name' => 'Updated Tag',
                'color' => '#00FF00',
                'description' => 'Updated description'
            ];

            $response = $this->putJson("/api/tags/{$tag->id}", $updateData);

            $response->assertStatus(200)
                ->assertJson([
                    'data' => [
                        'name' => 'Updated Tag',
                        'color' => '#00FF00',
                        'description' => 'Updated description'
                    ]
                ]);

            $this->assertDatabaseHas('tags', [
                'id' => $tag->id,
                'name' => 'Updated Tag'
            ]);
        });

        it('can partially update tag', function () {
            Sanctum::actingAs($this->user);

            $tag = Tag::factory()->create(['name' => 'Original']);
            $updateData = ['name' => 'Updated Only Name'];

            $response = $this->putJson("/api/tags/{$tag->id}", $updateData);

            $response->assertStatus(200)
                ->assertJson([
                    'data' => [
                        'name' => 'Updated Only Name'
                    ]
                ]);
        });

        it('cannot update tag without authentication', function () {
            $tag = Tag::factory()->create();
            $updateData = ['name' => 'Updated'];

            $response = $this->putJson("/api/tags/{$tag->id}", $updateData);

            $response->assertStatus(401);
        });

    });

    describe('DELETE /api/tags/{tag} (Destroy)', function () {
        
        it('can delete tag with authentication', function () {
            Sanctum::actingAs($this->user);

            $tag = Tag::factory()->create();

            $response = $this->deleteJson("/api/tags/{$tag->id}", []);

            $response->assertStatus(204);
            
            $this->assertDatabaseMissing('tags', [
                'id' => $tag->id
            ]);
        });

    });

    describe('GET /api/tags/popular', function () {
        
        it('returns most used tags', function () {
            $tag1 = Tag::factory()->create();
            $tag2 = Tag::factory()->create();
            $tag3 = Tag::factory()->create();

            // tag1 tem 3 posts
            $posts1 = Post::factory()->count(3)->create(['user_id' => $this->user->id]);
            foreach ($posts1 as $post) {
                $post->tags()->attach($tag1->id);
            }

            // tag2 tem 1 post
            $post2 = Post::factory()->create(['user_id' => $this->user->id]);
            $post2->tags()->attach($tag2->id);

            // tag3 sem posts

            $response = $this->getJson('/api/tags/popular');

            $response->assertStatus(200);
            
            $tags = $response->json('data');
            expect($tags)->toHaveCount(3);
            
            // Primeira tag deve ser a mais usada
            expect($tags[0]['id'])->toBe($tag1->id);
        });

        it('can limit number of popular tags', function () {
            Tag::factory()->count(5)->create();

            $response = $this->getJson('/api/tags/popular?limit=3');

            $response->assertStatus(200);
            expect($response->json('data'))->toHaveCount(3);
        });

    });

    describe('GET /api/tags/search', function () {
        
        it('can search tags by name', function () {
            Tag::factory()->create(['name' => 'Laravel Framework']);
            Tag::factory()->create(['name' => 'React Native']);
            Tag::factory()->create(['name' => 'Laravel Eloquent']);

            $response = $this->getJson('/api/tags/search?q=Laravel');

            $response->assertStatus(200);
            
            $tags = $response->json('data');
            expect($tags)->toHaveCount(2);
            
            foreach ($tags as $tag) {
                expect($tag['name'])->toContain('Laravel');
            }
        });

        it('can search tags by description', function () {
            Tag::factory()->create([
                'name' => 'Backend',
                'description' => 'Posts about Laravel development'
            ]);
            Tag::factory()->create([
                'name' => 'Frontend',
                'description' => 'Posts about React development'
            ]);

            $response = $this->getJson('/api/tags/search?q=Laravel');

            $response->assertStatus(200);
            expect($response->json('data'))->toHaveCount(1);
        });

        it('requires search term', function () {
            $response = $this->getJson('/api/tags/search');

            $response->assertStatus(400)
                ->assertJson([
                    'message' => 'Termo de busca é obrigatório.',
                    'error' => 'MISSING_SEARCH_TERM'
                ]);
        });

    });

})->group('api', 'tags');