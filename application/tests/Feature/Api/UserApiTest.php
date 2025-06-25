<?php

use App\Models\User;
use Laravel\Sanctum\Sanctum;

describe('User API', function () {
    
    beforeEach(function () {
        $this->user = User::factory()->create();
    });

    describe('GET /api/users (Index)', function () {
        
        it('can list users without authentication', function () {
            User::factory()->count(5)->create();

            $response = $this->getJson('/api/users');

            $response->assertStatus(200)
                ->assertJsonStructure([
                    'data' => [
                        '*' => [
                            'id',
                            'name',
                            'email',
                            'created_at',
                            'updated_at'
                        ]
                    ],
                    'links',
                    'meta'
                ]);

            expect($response->json('data'))->toHaveCount(6); // 5 + 1 (user from beforeEach)
        });

        it('can paginate users', function () {
            User::factory()->count(20)->create();

            $response = $this->getJson('/api/users?per_page=5');

            $response->assertStatus(200);
            expect($response->json('data'))->toHaveCount(5);
            expect($response->json('meta.per_page'))->toBe(5);
        });

    });

    describe('POST /api/users (Store)', function () {
        
        it('can create user with authentication', function () {
            Sanctum::actingAs($this->user);

            $userData = [
                'name' => 'New User',
                'email' => 'newuser@example.com',
                'password' => 'password123',
                'password_confirmation' => 'password123'
            ];

            $response = $this->postJson('/api/users', $userData);

            $response->assertStatus(201)
                ->assertJsonStructure([
                    'data' => [
                        'id',
                        'name',
                        'email',
                        'created_at',
                        'updated_at'
                    ]
                ])
                ->assertJson([
                    'data' => [
                        'name' => 'New User',
                        'email' => 'newuser@example.com'
                    ]
                ]);

            $this->assertDatabaseHas('users', [
                'name' => 'New User',
                'email' => 'newuser@example.com'
            ]);
        });

        it('cannot create user without authentication', function () {
            $userData = [
                'name' => 'New User',
                'email' => 'newuser@example.com',
                'password' => 'password123',
                'password_confirmation' => 'password123'
            ];

            $response = $this->postJson('/api/users', $userData);

            $response->assertStatus(401);
        });

        it('validates required fields', function () {
            Sanctum::actingAs($this->user);
            $response = $this->postJson('/api/users', []);

            $response->assertStatus(422)
                ->assertJsonValidationErrors(['name', 'email', 'password']);
        });

        it('validates unique email', function () {
            Sanctum::actingAs($this->user);
            $existingUser = User::factory()->create(['email' => 'existing@example.com']);

            $userData = [
                'name' => 'New User',
                'email' => 'existing@example.com',
                'password' => 'password123',
                'password_confirmation' => 'password123'
            ];

            $response = $this->postJson('/api/users', $userData);

            $response->assertStatus(422)
                ->assertJsonValidationErrors(['email']);
        });

    });

    describe('GET /api/users/{user} (Show)', function () {
        
        it('can show specific user without authentication', function () {
            $targetUser = User::factory()->create();

            $response = $this->getJson("/api/users/{$targetUser->id}");

            $response->assertStatus(200)
                ->assertJsonStructure([
                    'data' => [
                        'id',
                        'name',
                        'email',
                        'created_at',
                        'updated_at'
                    ]
                ])
                ->assertJson([
                    'data' => [
                        'id' => $targetUser->id,
                        'name' => $targetUser->name,
                        'email' => $targetUser->email
                    ]
                ]);
        });

    });

    describe('PUT /api/users/{user} (Update)', function () {
        
        it('can update user with authentication', function () {
            Sanctum::actingAs($this->user);

            $targetUser = User::factory()->create();
            $updateData = [
                'name' => 'Updated Name',
                'email' => 'updated@example.com'
            ];

            $response = $this->putJson("/api/users/{$targetUser->id}", $updateData);

            $response->assertStatus(200)
                ->assertJson([
                    'data' => [
                        'id' => $targetUser->id,
                        'name' => 'Updated Name',
                        'email' => 'updated@example.com'
                    ]
                ]);

            $this->assertDatabaseHas('users', [
                'id' => $targetUser->id,
                'name' => 'Updated Name',
                'email' => 'updated@example.com'
            ]);
        });

        it('can partially update user', function () {
            Sanctum::actingAs($this->user);
            $targetUser = User::factory()->create(['name' => 'Original Name']);
            $updateData = ['name' => 'Only Name Updated'];

            $response = $this->putJson("/api/users/{$targetUser->id}", $updateData);

            $response->assertStatus(200)
                ->assertJson([
                    'data' => [
                        'name' => 'Only Name Updated',
                        'email' => $targetUser->email // Email não mudou
                    ]
                ]);
        });

        it('cannot update user without authentication', function () {
            $targetUser = User::factory()->create();
            $updateData = ['name' => 'Updated Name'];

            $response = $this->putJson("/api/users/{$targetUser->id}", $updateData);

            $response->assertStatus(401);
        });

        it('validates unique email on update', function () {
            Sanctum::actingAs($this->user);
            $user1 = User::factory()->create(['email' => 'user1@example.com']);
            $user2 = User::factory()->create(['email' => 'user2@example.com']);

            $updateData = ['email' => 'user1@example.com'];

            $response = $this->putJson("/api/users/{$user2->id}", $updateData);

            $response->assertStatus(422)
                ->assertJsonValidationErrors(['email']);
        });

    });

    describe('DELETE /api/users/{user} (Destroy)', function () {
        
        it('can delete user with authentication', function () {
            Sanctum::actingAs($this->user);

            $targetUser = User::factory()->create();

            $response = $this->deleteJson("/api/users/{$targetUser->id}", []);

            $response->assertStatus(204);
            
            $this->assertDatabaseMissing('users', [
                'id' => $targetUser->id
            ]);
        });

        it('cannot delete user without authentication', function () {
            $targetUser = User::factory()->create();

            $response = $this->deleteJson("/api/users/{$targetUser->id}");

            $response->assertStatus(401);
        });

    });

})->group('api', 'users');