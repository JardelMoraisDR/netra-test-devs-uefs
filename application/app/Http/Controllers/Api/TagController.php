<?php

namespace App\Http\Controllers\Api;

use App\DTOs\TagDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\StoreTagRequest;
use App\Http\Requests\Api\UpdateTagRequest;
use App\Http\Resources\TagResource;
use App\Models\Tag;
use App\Services\TagService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Validation\ValidationException;

class TagController extends Controller
{
    public function __construct(
        private TagService $tagService
    ) {
    }

    public function index(): AnonymousResourceCollection
    {
        if (request('all')) {
            $tags = $this->tagService->getAllTagsCollection();
            return TagResource::collection($tags);
        }
        
        $perPage = request('per_page', 15);
        $tags = $this->tagService->getAllTags($perPage);
        
        return TagResource::collection($tags);
    }

    public function store(StoreTagRequest $request): TagResource
    {
        $dto = TagDTO::fromRequest($request->validated());
        if (!$dto->isValidForCreate()) {
            throw new ValidationException('Dados obrigatórios ausentes');
        }

        $tag = $this->tagService->createTag($dto);
        
        return new TagResource($tag);
    }

    public function show(Tag $tag): TagResource
    {
        return new TagResource($tag);
    }

    public function update(UpdateTagRequest $request, Tag $tag): TagResource
    {
        $dto = TagDTO::fromRequest($request->validated());
        if (!$dto->isValidForUpdate()) {
            throw new ValidationException('Nenhum dado para atualizar');
        }
        
        $updatedTag = $this->tagService->updateTag($tag, $dto);
        
        return new TagResource($updatedTag);
    }

    public function destroy(Tag $tag): JsonResponse
    {
        $this->tagService->deleteTag($tag);
        
        return response()->json(null, 204);
    }

    public function popular(): AnonymousResourceCollection
    {
        $limit = request('limit', 10);
        $tags = $this->tagService->getMostUsedTags($limit);
        
        return TagResource::collection($tags);
    }

    public function search(): AnonymousResourceCollection|JsonResponse
    {
        $term = request('q');
        
        if (!$term) {
            return response()->json([
                'message' => 'Termo de busca é obrigatório.',
                'error' => 'MISSING_SEARCH_TERM'
            ], 400);
        }
        
        $tags = $this->tagService->searchTags($term);
        
        return TagResource::collection($tags);
    }
}