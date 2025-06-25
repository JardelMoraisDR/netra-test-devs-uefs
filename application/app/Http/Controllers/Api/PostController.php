<?php

namespace App\Http\Controllers\Api;

use App\DTOs\PostDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\StorePostRequest;
use App\Http\Requests\Api\UpdatePostRequest;
use App\Http\Resources\PostResource;
use App\Models\Post;
use App\Services\PostService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Validation\ValidationException;

class PostController extends Controller
{
    public function __construct(
        private PostService $postService
    ) {
    }

    public function index(): AnonymousResourceCollection
    {
        $perPage = request('per_page', 15);
        $status = request('status');
        
        if ($status === 'published') {
            $posts = $this->postService->getPublishedPosts($perPage);
        } else {
            $posts = $this->postService->getAllPosts($perPage);
        }
        
        return PostResource::collection($posts);
    }

    public function store(StorePostRequest $request): PostResource
    {
        $dto = PostDTO::fromRequest($request->validated());
        if (!$dto->isValidForCreate()) {
            throw new ValidationException('Dados obrigatórios ausentes');
        }

        $post = $this->postService->createPost($dto);
        
        return new PostResource($post);
    }

    public function show(Post $post): PostResource
    {
        return new PostResource($post->load(['user', 'tags']));
    }

    public function update(UpdatePostRequest $request, Post $post): PostResource
    {
        $dto = PostDTO::fromRequest($request->validated());
        if (!$dto->isValidForUpdate()) {
            throw new ValidationException('Nenhum dado para atualizar');
        }

        $updatedPost = $this->postService->updatePost($post, $dto);
        
        return new PostResource($updatedPost);
    }

    public function destroy(Post $post): JsonResponse
    {
        $this->postService->deletePost($post);
        
        return response()->json(null, 204);
    }

    public function publish(Post $post): PostResource
    {
        $publishedPost = $this->postService->publishPost($post);
        
        return new PostResource($publishedPost);
    }

    public function unpublish(Post $post): PostResource
    {
        $unpublishedPost = $this->postService->unpublishPost($post);
        
        return new PostResource($unpublishedPost);
    }

    public function getByUser(string $userId): AnonymousResourceCollection
    {
        $perPage = request('per_page', 15);
        $posts = $this->postService->getPostsByUser($userId, $perPage);
        
        return PostResource::collection($posts);
    }

    public function getByTag(string $tagId): AnonymousResourceCollection
    {
        $perPage = request('per_page', 15);
        $posts = $this->postService->getPostsByTag($tagId, $perPage);
        
        return PostResource::collection($posts);
    }
}