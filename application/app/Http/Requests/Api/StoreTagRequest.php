<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class StoreTagRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255', 'unique:tags,name'],
            'slug' => ['nullable', 'string', 'max:255', 'unique:tags,slug'],
            'color' => ['nullable', 'string', 'regex:/^#[0-9A-Fa-f]{6}$/'],
            'description' => ['nullable', 'string', 'max:500'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'O campo nome é obrigatório.',
            'name.unique' => 'Já existe uma tag com este nome.',
            'name.max' => 'O nome não pode ter mais de 255 caracteres.',
            'slug.unique' => 'Este slug já está em uso.',
            'slug.max' => 'O slug não pode ter mais de 255 caracteres.',
            'color.regex' => 'A cor deve estar no formato hexadecimal (#RRGGBB).',
            'description.max' => 'A descrição não pode ter mais de 500 caracteres.',
        ];
    }
}