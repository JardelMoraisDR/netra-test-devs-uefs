<?php

namespace App\Repositories\Contracts;

use App\Models\Tag;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

interface TagRepositoryInterface
{
    public function paginate(int $perPage = 15): LengthAwarePaginator;
    public function findById(string $id): ?Tag;
    public function findBySlug(string $slug): ?Tag;
    public function create(array $data): Tag;
    public function update(Tag $tag, array $data): Tag;
    public function delete(Tag $tag): bool;
    public function getAll(): Collection;
    public function getMostUsed(int $limit = 10): Collection;
    public function search(string $term): Collection;
}