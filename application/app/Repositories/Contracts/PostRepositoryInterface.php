<?php

namespace App\Repositories\Contracts;

use App\Models\Post;
use Illuminate\Pagination\LengthAwarePaginator;

interface PostRepositoryInterface
{
    public function paginate(int $perPage = 15): LengthAwarePaginator;
    public function findById(string $id): ?Post;
    public function findBySlug(string $slug): ?Post;
    public function create(array $data): Post;
    public function update(Post $post, array $data): Post;
    public function delete(Post $post): bool;
    public function getPublished(int $perPage = 15): LengthAwarePaginator;
    public function getByUser(string $userId, int $perPage = 15): LengthAwarePaginator;
    public function getByTag(string $tagId, int $perPage = 15): LengthAwarePaginator;
}