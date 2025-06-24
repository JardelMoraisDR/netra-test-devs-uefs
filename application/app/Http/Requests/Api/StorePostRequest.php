<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @OA\Schema(
 *     schema="StorePostRequest",
 *     required={"user_id", "title"},
 *     @OA\Property(property="user_id", type="string", format="uuid", example="123e4567-e89b-12d3-a456-426614174000"),
 *     @OA\Property(property="title", type="string", example="Meu Primeiro Post"),
 *     @OA\Property(property="slug", type="string", example="meu-primeiro-post"),
 *     @OA\Property(property="excerpt", type="string", example="Resumo do post..."),
 *     @OA\Property(property="content", type="string", example="Conteúdo completo do post..."),
 *     @OA\Property(property="featured_image_url", type="string", format="url", example="https://example.com/image.jpg"),
 *     @OA\Property(property="status", type="string", enum={"draft", "published"}, example="draft"),
 *     @OA\Property(property="published_at", type="string", format="date-time", example="2024-12-25T10:00:00Z"),
 *     @OA\Property(property="tag_ids", type="array", @OA\Items(type="string", format="uuid"))
 * )
 */
class StorePostRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'user_id' => ['required', 'string', 'exists:users,id'],
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', 'unique:posts,slug'],
            'excerpt' => ['nullable', 'string', 'max:500'],
            'content' => ['nullable', 'string'],
            'featured_image_url' => ['nullable', 'url'],
            'status' => ['nullable', 'string', 'in:draft,published'],
            'published_at' => ['nullable', 'date'],
            'tag_ids' => ['nullable', 'array'],
            'tag_ids.*' => ['string', 'exists:tags,id'],
        ];
    }

    public function messages(): array
    {
        return [
            'user_id.required' => 'O campo usuário é obrigatório.',
            'user_id.exists' => 'O usuário selecionado não existe.',
            'title.required' => 'O campo título é obrigatório.',
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