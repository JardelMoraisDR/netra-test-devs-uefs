<?php

namespace App\DTOs;

use Illuminate\Support\Str;

class TagDTO
{
    public function __construct(
        public readonly ?string $name = null,
        public readonly ?string $slug = null,
        public readonly ?string $color = null,
        public readonly ?string $description = null,
    ) {
    }

    public static function fromRequest(array $data): self
    {
        $slug = null;
        if (isset($data['name'])) {
            $slug = $data['slug'] ?? Str::slug($data['name']);
        } elseif (isset($data['slug'])) {
            $slug = $data['slug'];
        }

        return new self(
            name: $data['name'] ?? null,
            slug: $slug,
            color: $data['color'] ?? null,
            description: $data['description'] ?? null,
        );
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->name !== null) {
            $data['name'] = $this->name;
        }

        if ($this->slug !== null) {
            $data['slug'] = $this->slug;
        }

        if ($this->color !== null) {
            $data['color'] = $this->color;
        }

        if ($this->description !== null) {
            $data['description'] = $this->description;
        }

        return $data;
    }

    public function isValidForCreate(): bool
    {
        return !empty($this->name);
    }

    public function isValidForUpdate(): bool
    {
        return $this->name !== null || 
               $this->slug !== null ||
               $this->color !== null ||
               $this->description !== null;
    }

    public function hasDataToUpdate(): bool
    {
        return !empty($this->toArray());
    }
}