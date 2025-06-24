<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

/**
 * @OA\Schema(
 *     schema="UpdatePostRequest",
 *     @OA\Property(property="user_id", type="string", format="uuid", example="123e4567-e89b-12d3-a456-426614174000"),
 *     @OA\Property(property="title", type="string", example="Meu Post Atualizado"),
 *     @OA\Property(property="slug", type="string", example="meu-post-atualizado"),
 *     @OA\Property(property="excerpt", type="string", example="Resumo atualizado..."),
 *     @OA\Property(property="content", type="string", example="Conteúdo atualizado..."),
 *     @OA\Property(property="featured_image_url", type="string", format="url", example="https://example.com/new-image.jpg"),
 *     @OA\Property(property="status", type="string", enum={"draft", "published"}, example="published"),
 *     @OA\Property(property="published_at", type="string", format="date-time", example="2024-12-25T10:00:00Z"),
 *     @OA\Property(property="tag_ids", type="array", @OA\Items(type="string", format="uuid"))
 * )
 */
class UpdatePostRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $postId = $this->route('post')->id;

        return [
            'user_id' => ['sometimes', 'string', 'exists:users,id'],
            'title' => ['sometimes', 'string', 'max:255'],
            'slug' => ['sometimes', 'string', 'max:255', Rule::unique('posts', 'slug')->ignore($postId)],
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