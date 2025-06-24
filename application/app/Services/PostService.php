<?php

namespace App\Services;

use App\DTOs\PostDTO;
use App\Models\Post;
use App\Repositories\Contracts\PostRepositoryInterface;
use Illuminate\Pagination\LengthAwarePaginator;

class PostService
{
    public function __construct(
        private PostRepositoryInterface $postRepository
    ) {
    }

    public function getAllPosts(int $perPage = 15): LengthAwarePaginator
    {
        return $this->postRepository->paginate($perPage);
    }

    public function getPublishedPosts(int $perPage = 15): LengthAwarePaginator
    {
        return $this->postRepository->getPublished($perPage);
    }

    public function getPostById(string $id): ?Post
    {
        return $this->postRepository->findById($id);
    }

    public function getPostBySlug(string $slug): ?Post
    {
        return $this->postRepository->findBySlug($slug);
    }

    public function getPostsByUser(string $userId, int $perPage = 15): LengthAwarePaginator
    {
        return $this->postRepository->getByUser($userId, $perPage);
    }

    public function getPostsByTag(string $tagId, int $perPage = 15): LengthAwarePaginator
    {
        return $this->postRepository->getByTag($tagId, $perPage);
    }

    public function createPost(PostDTO $dto): Post
    {
        return $this->postRepository->create($dto->toArray());
    }

    public function updatePost(Post $post, PostDTO $dto): Post
    {
        return $this->postRepository->update($post, $dto->toArray());
    }

    public function deletePost(Post $post): bool
    {
        return $this->postRepository->delete($post);
    }

    public function publishPost(Post $post): Post
    {
        $data = [
            'status' => 'published',
            'published_at' => now(),
        ];

        return $this->postRepository->update($post, $data);
    }

    public function unpublishPost(Post $post): Post
    {
        $data = [
            'status' => 'draft',
            'published_at' => null,
        ];

        return $this->postRepository->update($post, $data);
    }
}