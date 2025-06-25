<?php

use App\Models\User;

describe('Login Authentication', function () {
    
    beforeEach(function () {
        $this->user = User::factory()->create([
            'email' => 'test@example.com',
            'password' => bcrypt('password123')
        ]);
        
        $this->loginData = [
            'email' => 'test@example.com',
            'password' => 'password123'
        ];
    });

    it('can login with valid credentials', function () {
        $response = $this->postJson('/api/auth/login', $this->loginData);

        $response->assertStatus(200)
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
                'message' => 'Login realizado com sucesso.'
            ]);

        expect($response->json('access_token'))->toContain('|');
        expect($response->json('user.email'))->toBe('test@example.com');
    });

    it('cannot login with invalid email', function () {
        $invalidData = array_merge($this->loginData, ['email' => 'invalid@example.com']);

        $response = $this->postJson('/api/auth/login', $invalidData);

        $response->assertStatus(422)
            ->assertJsonValidationErrors(['email'])
            ->assertJson([
                'message' => 'Os dados fornecidos são inválidos.',
                'error' => 'VALIDATION_ERROR'
            ]);
    });

    it('cannot login with invalid password', function () {
        $invalidData = array_merge($this->loginData, ['password' => 'wrongpassword']);

        $response = $this->postJson('/api/auth/login', $invalidData);

        $response->assertStatus(422)
            ->assertJsonValidationErrors(['email'])
            ->assertJsonPath('errors.email.0', 'As credenciais fornecidas estão incorretas.');
    });

    it('cannot login with missing email', function () {
        unset($this->loginData['email']);

        $response = $this->postJson('/api/auth/login', $this->loginData);

        $response->assertStatus(422)
            ->assertJsonValidationErrors(['email']);
    });

    it('cannot login with missing password', function () {
        unset($this->loginData['password']);

        $response = $this->postJson('/api/auth/login', $this->loginData);

        $response->assertStatus(422)
            ->assertJsonValidationErrors(['password']);
    });

    it('cannot login with invalid email format', function () {
        $invalidData = array_merge($this->loginData, ['email' => 'invalid-email']);

        $response = $this->postJson('/api/auth/login', $invalidData);

        $response->assertStatus(422)
            ->assertJsonValidationErrors(['email']);
    });

})->group('auth', 'login');