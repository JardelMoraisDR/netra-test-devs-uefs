<?php

namespace App\Repositories;

use App\Models\Post;
use App\Repositories\Contracts\PostRepositoryInterface;
use Illuminate\Pagination\LengthAwarePaginator;

class PostRepository implements PostRepositoryInterface
{
    public function __construct(private Post $model)
    {
    }

    public function paginate(int $perPage = 15): LengthAwarePaginator
    {
        return $this->model->with(['user', 'tags'])
            ->orderBy('created_at', 'desc')
            ->paginate($perPage);
    }

    public function findById(string $id): ?Post
    {
        return $this->model->with(['user', 'tags'])->find($id);
    }

    public function findBySlug(string $slug): ?Post
    {
        return $this->model->with(['user', 'tags'])
            ->where('slug', $slug)
            ->first();
    }

    public function create(array $data): Post
    {
        $post = $this->model->create($data);
        
        // Anexar tags se fornecidas
        if (isset($data['tag_ids']) && is_array($data['tag_ids'])) {
            $post->tags()->attach($data['tag_ids']);
        }
        
        return $post->load(['user', 'tags']);
    }

    public function update(Post $post, array $data): Post
    {
        $post->update($data);
        
        // Sincronizar tags se fornecidas
        if (isset($data['tag_ids']) && is_array($data['tag_ids'])) {
            $post->tags()->sync($data['tag_ids']);
        }
        
        return $post->fresh(['user', 'tags']);
    }

    public function delete(Post $post): bool
    {
        // Remover relacionamentos com tags
        $post->tags()->detach();
        
        return $post->delete();
    }

    public function getPublished(int $perPage = 15): LengthAwarePaginator
    {
        return $this->model->with(['user', 'tags'])
            ->where('status', 'published')
            ->whereNotNull('published_at')
            ->orderBy('published_at', 'desc')
            ->paginate($perPage);
    }

    public function getByUser(string $userId, int $perPage = 15): LengthAwarePaginator
    {
        return $this->model->with(['user', 'tags'])
            ->where('user_id', $userId)
            ->orderBy('created_at', 'desc')
            ->paginate($perPage);
    }

    public function getByTag(string $tagId, int $perPage = 15): LengthAwarePaginator
    {
        return $this->model->with(['user', 'tags'])
            ->whereHas('tags', function($query) use ($tagId) {
                $query->where('tag_id', $tagId);
            })
            ->orderBy('created_at', 'desc')
            ->paginate($perPage);
    }
}