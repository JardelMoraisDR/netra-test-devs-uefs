<?php

namespace App\DTOs;

use Illuminate\Support\Str;

class PostDTO
{
    public function __construct(
        public readonly string $user_id,
        public readonly string $title,
        public readonly string $slug,
        public readonly ?string $excerpt = null,
        public readonly ?string $content = null,
        public readonly ?string $featured_image_url = null,
        public readonly string $status = 'draft',
        public readonly ?string $published_at = null,
        public readonly ?array $tag_ids = null,
    ) {
    }

    public static function fromRequest(array $data): self
    {
        return new self(
            user_id: $data['user_id'],
            title: $data['title'],
            slug: $data['slug'] ?? Str::slug($data['title']),
            excerpt: $data['excerpt'] ?? null,
            content: $data['content'] ?? null,
            featured_image_url: $data['featured_image_url'] ?? null,
            status: $data['status'] ?? 'draft',
            published_at: $data['published_at'] ?? null,
            tag_ids: $data['tag_ids'] ?? null,
        );
    }

    public function toArray(): array
    {
        $data = [
            'user_id' => $this->user_id,
            'title' => $this->title,
            'slug' => $this->slug,
            'excerpt' => $this->excerpt,
            'content' => $this->content,
            'featured_image_url' => $this->featured_image_url,
            'status' => $this->status,
        ];

        if ($this->published_at) {
            $data['published_at'] = $this->published_at;
        }

        if ($this->tag_ids) {
            $data['tag_ids'] = $this->tag_ids;
        }

        return array_filter($data, fn($value) => $value !== null);
    }
}