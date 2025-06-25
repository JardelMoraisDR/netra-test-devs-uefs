<?php

namespace App\DTOs;

use Illuminate\Support\Str;

class PostDTO
{
    public function __construct(
        public readonly ?string $user_id = null,
        public readonly ?string $title = null,
        public readonly ?string $slug = null,
        public readonly ?string $excerpt = null,
        public readonly ?string $content = null,
        public readonly ?string $featured_image_url = null,
        public readonly ?string $status = 'draft',
        public readonly ?string $published_at = null,
        public readonly ?array $tag_ids = null,
    ) {
    }

    public static function fromRequest(array $data): self
    {
        // Para updates, gerar slug apenas se title estiver presente e slug não
        $slug = null;
        if (isset($data['title'])) {
            $slug = $data['slug'] ?? Str::slug($data['title']);
        } elseif (isset($data['slug'])) {
            $slug = $data['slug'];
        }

        return new self(
            user_id: $data['user_id'] ?? null,
            title: $data['title'] ?? null,
            slug: $slug,
            excerpt: $data['excerpt'] ?? null,
            content: $data['content'] ?? null,
            featured_image_url: $data['featured_image_url'] ?? null,
            status: $data['status'] ?? null,
            published_at: $data['published_at'] ?? null,
            tag_ids: $data['tag_ids'] ?? null,
        );
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->user_id !== null) {
            $data['user_id'] = $this->user_id;
        }

        if ($this->title !== null) {
            $data['title'] = $this->title;
        }

        if ($this->slug !== null) {
            $data['slug'] = $this->slug;
        }

        if ($this->excerpt !== null) {
            $data['excerpt'] = $this->excerpt;
        }

        if ($this->content !== null) {
            $data['content'] = $this->content;
        }

        if ($this->featured_image_url !== null) {
            $data['featured_image_url'] = $this->featured_image_url;
        }

        if ($this->status !== null) {
            $data['status'] = $this->status;
        }

        if ($this->published_at !== null) {
            $data['published_at'] = $this->published_at;
        }

        if ($this->tag_ids !== null) {
            $data['tag_ids'] = $this->tag_ids;
        }

        return $data;
    }

    public function isValidForCreate(): bool
    {
        return !empty($this->user_id) && !empty($this->title);
    }

    public function isValidForUpdate(): bool
    {
        return $this->user_id !== null || 
               $this->title !== null || 
               $this->slug !== null ||
               $this->excerpt !== null ||
               $this->content !== null ||
               $this->featured_image_url !== null ||
               $this->status !== null ||
               $this->published_at !== null ||
               $this->tag_ids !== null;
    }

    public function getPostData(): array
    {
        $data = $this->toArray();
        unset($data['tag_ids']);
        return $data;
    }

    public function hasDataToUpdate(): bool
    {
        return !empty($this->toArray());
    }
}