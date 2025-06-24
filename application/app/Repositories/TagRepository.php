<?php

namespace App\Repositories;

use App\Models\Tag;
use App\Repositories\Contracts\TagRepositoryInterface;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

class TagRepository implements TagRepositoryInterface
{
    public function __construct(private Tag $model)
    {
    }

    public function paginate(int $perPage = 15): LengthAwarePaginator
    {
        return $this->model->withCount('posts')
            ->orderBy('name')
            ->paginate($perPage);
    }

    public function findById(string $id): ?Tag
    {
        return $this->model->withCount('posts')->find($id);
    }

    public function findBySlug(string $slug): ?Tag
    {
        return $this->model->withCount('posts')
            ->where('slug', $slug)
            ->first();
    }

    public function create(array $data): Tag
    {
        return $this->model->create($data);
    }

    public function update(Tag $tag, array $data): Tag
    {
        $tag->update($data);
        return $tag->fresh();
    }

    public function delete(Tag $tag): bool
    {
        // Remover relacionamentos com posts
        $tag->posts()->detach();
        
        return $tag->delete();
    }

    public function getAll(): Collection
    {
        return $this->model->withCount('posts')
            ->orderBy('name')
            ->get();
    }

    public function getMostUsed(int $limit = 10): Collection
    {
        return $this->model->withCount('posts')
            ->orderBy('posts_count', 'desc')
            ->limit($limit)
            ->get();
    }

    public function search(string $term): Collection
    {
        return $this->model->withCount('posts')
            ->where('name', 'like', "%{$term}%")
            ->orWhere('description', 'like', "%{$term}%")
            ->orderBy('name')
            ->get();
    }
}