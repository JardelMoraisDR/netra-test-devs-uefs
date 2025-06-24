<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

/**
 * @OA\Schema(
 *     schema="UpdateTagRequest",
 *     @OA\Property(property="name", type="string", example="Laravel Framework"),
 *     @OA\Property(property="slug", type="string", example="laravel-framework"),
 *     @OA\Property(property="color", type="string", example="#4CAF50"),
 *     @OA\Property(property="description", type="string", example="Posts atualizados sobre Laravel")
 * )
 */
class UpdateTagRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $tagId = $this->route('tag')->id;

        return [
            'name' => ['sometimes', 'string', 'max:255', Rule::unique('tags', 'name')->ignore($tagId)],
            'slug' => ['sometimes', 'string', 'max:255', Rule::unique('tags', 'slug')->ignore($tagId)],
            'color' => ['nullable', 'string', 'regex:/^#[0-9A-Fa-f]{6}$/'],
            'description' => ['nullable', 'string', 'max:500'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.unique' => 'Já existe uma tag com este nome.',
            'name.max' => 'O nome não pode ter mais de 255 caracteres.',
            'slug.unique' => 'Este slug já está em uso.',
            'slug.max' => 'O slug não pode ter mais de 255 caracteres.',
            'color.regex' => 'A cor deve estar no formato hexadecimal (#RRGGBB).',
            'description.max' => 'A descrição não pode ter mais de 500 caracteres.',
        ];
    }
}