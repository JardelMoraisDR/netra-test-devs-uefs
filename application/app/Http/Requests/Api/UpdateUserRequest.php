<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        $user = $this->route('user');
        $userId = $user ? $user->id : null;

        return [
            'name' => ['sometimes', 'string', 'max:255'],
            'email' => [
                'sometimes', 
                'string', 
                'email', 
                'max:255', 
                $userId ? Rule::unique('users', 'email')->ignore($userId) : 'unique:users,email'
            ],
            'password' => ['sometimes', 'string', 'min:8', 'confirmed'],
        ];
    }

    /**
     * Get custom messages for validator errors.
     */
    public function messages(): array
    {
        return [
            'name.string' => 'O nome deve ser um texto válido.',
            'name.max' => 'O nome não pode ter mais de 255 caracteres.',
            'email.string' => 'O email deve ser um texto válido.',
            'email.email' => 'O email deve ter um formato válido.',
            'email.unique' => 'Este email já está em uso por outro usuário.',
            'email.max' => 'O email não pode ter mais de 255 caracteres.',
            'password.string' => 'A senha deve ser um texto válido.',
            'password.min' => 'A senha deve ter pelo menos 8 caracteres.',
            'password.confirmed' => 'A confirmação da senha não confere.',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     */
    public function attributes(): array
    {
        return [
            'name' => 'nome',
            'email' => 'email',
            'password' => 'senha',
            'password_confirmation' => 'confirmação da senha',
        ];
    }

    /**
     * Prepare the data for validation.
     */
    protected function prepareForValidation(): void
    {
        // Remove espaços extras do nome
        if ($this->has('name')) {
            $this->merge([
                'name' => trim($this->name),
            ]);
        }

        // Converte email para minúsculo
        if ($this->has('email')) {
            $this->merge([
                'email' => strtolower(trim($this->email)),
            ]);
        }
    }
}