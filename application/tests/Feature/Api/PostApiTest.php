<?php

use App\Models\Post;
use App\Models\Tag;
use App\Models\User;

use Laravel\Sanctum\Sanctum;

describe('Post API', function () {
    
    beforeEach(function () {
        $this->user = User::factory()->create();
        $this->tag1 = Tag::factory()->create();
        $this->tag2 = Tag::factory()->create();
    });

    describe('GET /api/posts (Index)', function () {
        
        it('can list posts without authentication', function () {
            Post::factory()->count(5)->create([
                'user_id' => $this->user->id,
            ]);

            $response = $this->getJson('/api/posts');

            $response->assertStatus(200)
                ->assertJsonStructure([
                    'data' => [
                        '*' => [
                            'id',
                            'title',
                            'slug',
                            'excerpt',
                            'featured_image_url',
                            'status',
                            'published_at',
                            'created_at',
                            'updated_at',
                            'user',
                            'tags'
                        ]
                    ]
                ]);
        });

    });

    describe('POST /api/posts (Store)', function () {
        
        it('can create post with authentication', function () {
            Sanctum::actingAs($this->user);

            $postData = [
                'user_id' => $this->user->id,
                'title' => 'Test Post',
                'content' => 'This is test content',
                'excerpt' => 'test excerpt',
                'featured_image_url' => 'http://example.com/image.jpg',
                'status' => 'draft',
                'tag_ids' => [$this->tag1->id, $this->tag2->id]
            ];

            $response = $this->postJson('/api/posts', $postData);

            $response->assertStatus(201)
                ->assertJsonStructure([
                    'data' => [
                        'id',
                        'title',
                        'slug',
                        'content',
                        'status',
                        'user',
                        'tags'
                    ]
                ])
                ->assertJson([
                    'data' => [
                        'title' => 'Test Post',
                        'slug' => 'test-post',
                        'excerpt' => 'test excerpt',
                        'content' => 'This is test content',
                        'status' => 'draft',
                        'user' => [
                            'id' => $this->user->id
                        ]
                    ]
                ]);

            $this->assertDatabaseHas('posts', [
                'title' => 'Test Post',
                'slug' => 'test-post',
                'user_id' => $this->user->id
            ]);

            // Verificar relacionamento com tags
            $post = Post::where('title', 'Test Post')->first();
            expect($post->tags)->toHaveCount(2);
        });

        it('generates slug automatically from title', function () {
            Sanctum::actingAs($this->user);
            $postData = [
                'user_id' => $this->user->id,
                'title' => 'Post Title With Spaces',
                'content' => 'Content',
                'excerpt' => 'Test excerpt',
                'featured_image_url' => 'http://example.com/image.jpg'
            ];

            $response = $this->postJson('/api/posts', $postData);

            $response->assertStatus(201)
                ->assertJson([
                    'data' => [
                        'slug' => 'post-title-with-spaces'
                    ]
                ]);
        });

        it('can use custom slug', function () {
            Sanctum::actingAs($this->user);

            $postData = [
                'user_id' => $this->user->id,
                'title' => 'Test Post',
                'excerpt' => 'Test excerpt',
                'slug' => 'custom-slug',
                'content' => 'Content',
                'featured_image_url' => 'http://example.com/image.jpg'
            ];

            $response = $this->postJson('/api/posts', $postData);

            $response->assertStatus(201)
                ->assertJson([
                    'data' => [
                        'slug' => 'custom-slug'
                    ]
                ]);
        });

        it('cannot create post without authentication', function () {
            $postData = [
                'user_id' => $this->user->id,
                'title' => 'Test Post',
                'excerpt' => 'Test excerpt',
                'content' => 'Content',
                'featured_image_url' => 'http://example.com/image.jpg'
            ];

            $response = $this->postJson('/api/posts', $postData);

            $response->assertStatus(401);
        });

        it('validates required fields', function () {
            Sanctum::actingAs($this->user);

            $response = $this->postJson('/api/posts', []);

            $response->assertStatus(422)
                ->assertJsonValidationErrors(['user_id', 'title']);
        });

    });

    describe('GET /api/posts/{post} (Show)', function () {
        
        it('can show post by id', function () {
            $post = Post::factory()->create(['user_id' => $this->user->id]);

            $response = $this->getJson("/api/posts/{$post->id}");

            $response->assertStatus(200)
                ->assertJson([
                    'data' => [
                        'id' => $post->id,
                        'title' => $post->title
                    ]
                ]);
        });

        it('includes content in show response', function () {
            $post = Post::factory()->create(['user_id' => $this->user->id, 'content' => 'Full content here']);

            $response = $this->getJson("/api/posts/{$post->id}");

            $response->assertStatus(200)
                ->assertJsonPath('data.content', 'Full content here');
        });

    });

    describe('PUT /api/posts/{post} (Update)', function () {
        
        it('can update post with authentication', function () {
            Sanctum::actingAs($this->user);

            $post = Post::factory()->create(['user_id' => $this->user->id]);
            $updateData = [
                'title' => 'Updated Title',
                'content' => 'Updated content'
            ];

            $response = $this->putJson("/api/posts/{$post->id}", $updateData);

            $response->assertStatus(200)
                ->assertJson([
                    'data' => [
                        'title' => 'Updated Title',
                        'content' => 'Updated content'
                    ]
                ]);
        });

        it('can update post tags', function () {
            Sanctum::actingAs($this->user);

            $post = Post::factory()->create(['user_id' => $this->user->id]);
            $newTag = Tag::factory()->create();
            
            $updateData = [
                'tag_ids' => [$newTag->id]
            ];

            $response = $this->putJson("/api/posts/{$post->id}", $updateData);

            $response->assertStatus(200);
            
            $post->refresh();
            expect($post->tags)->toHaveCount(1);
            expect($post->tags->first()->id)->toBe($newTag->id);
        });

    });

    describe('DELETE /api/posts/{post} (Destroy)', function () {
        
        it('can delete post with authentication', function () {
            Sanctum::actingAs($this->user);

            $post = Post::factory()->create(['user_id' => $this->user->id]);

            $response = $this->deleteJson("/api/posts/{$post->id}", []);

            $response->assertStatus(204);
            
            $this->assertDatabaseMissing('posts', [
                'id' => $post->id
            ]);
        });

    });

    describe('POST /api/posts/{post}/publish', function () {
        
        it('can publish draft post', function () {
            Sanctum::actingAs($this->user);

            $post = Post::factory()->create(['user_id' => $this->user->id, 'status' => 'draft']);

            $response = $this->postJson("/api/posts/{$post->id}/publish", []);

            $response->assertStatus(200)
                ->assertJson([
                    'data' => [
                        'status' => 'published'
                    ]
                ]);

            $post->refresh();
            expect($post->status)->toBe('published');
            expect($post->published_at)->not->toBeNull();
        });

    });

    describe('POST /api/posts/{post}/unpublish', function () {
        
        it('can unpublish published post', function () {
            Sanctum::actingAs($this->user);

            $post = Post::factory()->create([
                'user_id' => $this->user->id,
                'status' => 'published',
                'published_at' => now()
            ]);

            $response = $this->postJson("/api/posts/{$post->id}/unpublish", []);

            $response->assertStatus(200)
                ->assertJson([
                    'data' => [
                        'status' => 'draft'
                    ]
                ]);

            $post->refresh();
            expect($post->status)->toBe('draft');
            expect($post->published_at)->toBeNull();
        });

    });

    describe('Relationships', function () {
        
        it('includes user and tags in response', function () {
            $post = Post::factory()->create(['user_id' => $this->user->id]);
            $post->tags()->attach([$this->tag1->id, $this->tag2->id]);

            $response = $this->getJson("/api/posts/{$post->id}");

            $response->assertStatus(200)
                ->assertJsonStructure([
                    'data' => [
                        'user' => ['id', 'name', 'email'],
                        'tags' => [
                            '*' => ['id', 'name', 'slug', 'color']
                        ]
                    ]
                ]);

            expect($response->json('data.tags'))->toHaveCount(2);
        });

    });

})->group('api', 'posts');