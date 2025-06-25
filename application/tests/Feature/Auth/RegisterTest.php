<?php

use App\Models\User;

describe('Register Authentication', function () {
    
    beforeEach(function () {
        $this->registerData = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => 'password123',
            'password_confirmation' => 'password123'
        ];
    });

    it('can register with valid data', function () {
        $response = $this->postJson('/api/auth/register', $this->registerData);

        $response->assertStatus(201)
            ->assertJsonStructure([
                'access_token',
                'token_type',
                'user' => [
                    'id',
                    'name',
                    'email',
                    'created_at',
                    'updated_at'
                ],
                'message'
            ])
            ->assertJson([
                'token_type' => 'Bearer',
                'message' => 'Conta criada com sucesso.',
                'user' => [
                    'name' => 'John Doe',
                    'email' => 'john@example.com'
                ]
            ]);

        expect($response->json('access_token'))->toContain('|');
        
        $this->assertDatabaseHas('users', [
            'name' => 'John Doe',
            'email' => 'john@example.com'
        ]);
    });

    it('cannot register with existing email', function () {
        User::factory()->create(['email' => 'john@example.com']);

        $response = $this->postJson('/api/auth/register', $this->registerData);

        $response->assertStatus(422)
            ->assertJsonValidationErrors(['email'])
            ->assertJsonPath('errors.email.0', 'Este email já está em uso.');
    });

    it('cannot register without required fields', function () {
        $response = $this->postJson('/api/auth/register', []);

        $response->assertStatus(422)
            ->assertJsonValidationErrors(['name', 'email', 'password']);
    });

    it('cannot register with password less than 8 characters', function () {
        $invalidData = array_merge($this->registerData, [
            'password' => '123',
            'password_confirmation' => '123'
        ]);

        $response = $this->postJson('/api/auth/register', $invalidData);

        $response->assertStatus(422)
            ->assertJsonValidationErrors(['password']);
    });

    it('cannot register with mismatched password confirmation', function () {
        $invalidData = array_merge($this->registerData, [
            'password_confirmation' => 'different_password'
        ]);

        $response = $this->postJson('/api/auth/register', $invalidData);

        $response->assertStatus(422)
            ->assertJsonValidationErrors(['password']);
    });

    it('cannot register with invalid email format', function () {
        $invalidData = array_merge($this->registerData, ['email' => 'invalid-email']);

        $response = $this->postJson('/api/auth/register', $invalidData);

        $response->assertStatus(422)
            ->assertJsonValidationErrors(['email']);
    });

})->group('auth', 'register');