<?php

namespace App\DTOs;

use Illuminate\Support\Str;

class TagDTO
{
    public function __construct(
        public readonly string $name,
        public readonly string $slug,
        public readonly ?string $color = null,
        public readonly ?string $description = null,
    ) {
    }

    public static function fromRequest(array $data): self
    {
        return new self(
            name: $data['name'],
            slug: $data['slug'] ?? Str::slug($data['name']),
            color: $data['color'] ?? null,
            description: $data['description'] ?? null,
        );
    }

    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'slug' => $this->slug,
            'color' => $this->color,
            'description' => $this->description,
        ];
    }
}