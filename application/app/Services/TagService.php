<?php

namespace App\Services;

use App\DTOs\TagDTO;
use App\Models\Tag;
use App\Repositories\Contracts\TagRepositoryInterface;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

class TagService
{
    public function __construct(
        private TagRepositoryInterface $tagRepository
    ) {
    }

    public function getAllTags(int $perPage = 15): LengthAwarePaginator
    {
        return $this->tagRepository->paginate($perPage);
    }

    public function getAllTagsCollection(): Collection
    {
        return $this->tagRepository->getAll();
    }

    public function getMostUsedTags(int $limit = 10): Collection
    {
        return $this->tagRepository->getMostUsed($limit);
    }

    public function getTagById(string $id): ?Tag
    {
        return $this->tagRepository->findById($id);
    }

    public function getTagBySlug(string $slug): ?Tag
    {
        return $this->tagRepository->findBySlug($slug);
    }

    public function searchTags(string $term): Collection
    {
        return $this->tagRepository->search($term);
    }

    public function createTag(TagDTO $dto): Tag
    {
        return $this->tagRepository->create($dto->toArray());
    }

    public function updateTag(Tag $tag, TagDTO $dto): Tag
    {
        return $this->tagRepository->update($tag, $dto->toArray());
    }

    public function deleteTag(Tag $tag): bool
    {
        return $this->tagRepository->delete($tag);
    }
}