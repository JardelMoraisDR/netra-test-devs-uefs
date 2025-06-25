<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePostRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $post = $this->route('post');
        $postId = $post ? $post->id : null;

        return [
            'user_id' => ['sometimes', 'string', 'exists:users,id'],
            'title' => ['sometimes', 'string', 'max:255'],
            'slug' => [
                'sometimes', 
                'string', 
                'max:255', 
                $postId ? Rule::unique('posts', 'slug')->ignore($postId) : 'unique:posts,slug'
            ],
            'excerpt' => ['nullable', 'string', 'max:500'],
            'content' => ['nullable', 'string'],
            'featured_image_url' => ['nullable', 'url'],
            'status' => ['sometimes', 'string', 'in:draft,published'],
            'published_at' => ['nullable', 'date'],
            'tag_ids' => ['nullable', 'array'],
            'tag_ids.*' => ['string', 'exists:tags,id'],
        ];
    }

    public function messages(): array
    {
        return [
            'user_id.exists' => 'O usuário selecionado não existe.',
            'title.max' => 'O título não pode ter mais de 255 caracteres.',
            'slug.unique' => 'Este slug já está em uso.',
            'excerpt.max' => 'O resumo não pode ter mais de 500 caracteres.',
            'featured_image_url.url' => 'A URL da imagem deve ser válida.',
            'status.in' => 'O status deve ser rascunho ou publicado.',
            'published_at.date' => 'A data de publicação deve ser válida.',
            'tag_ids.array' => 'As tags devem ser uma lista.',
            'tag_ids.*.exists' => 'Uma ou mais tags selecionadas não existem.',
        ];
    }
}