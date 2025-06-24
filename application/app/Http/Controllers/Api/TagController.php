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

/**
 * @OA\Tag(
 *     name="Tags",
 *     description="Endpoints da API para gerenciamento de tags"
 * )
 */
class TagController extends Controller
{
    public function __construct(
        private TagService $tagService
    ) {
    }

    /**
     * @OA\Get(
     *     path="/api/tags",
     *     operationId="getTagsList",
     *     tags={"Tags"},
     *     summary="Obter lista de tags",
     *     description="Retorna lista de tags com paginação ou todas as tags",
     *     @OA\Parameter(
     *         name="per_page",
     *         in="query",
     *         description="Número de tags por página (omitir para retornar todas)",
     *         required=false,
     *         @OA\Schema(type="integer", default=15)
     *     ),
     *     @OA\Parameter(
     *         name="all",
     *         in="query",
     *         description="Retornar todas as tags sem paginação",
     *         required=false,
     *         @OA\Schema(type="boolean")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Operação realizada com sucesso",
     *         @OA\JsonContent(ref="#/components/schemas/TagResource")
     *     )
     * )
     */
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

    /**
     * @OA\Post(
     *     path="/api/tags",
     *     operationId="storeTag",
     *     tags={"Tags"},
     *     summary="Criar nova tag",
     *     description="Cria uma nova tag e retorna os dados da tag",
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/StoreTagRequest")
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Tag criada com sucesso",
     *         @OA\JsonContent(ref="#/components/schemas/TagResource")
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Erro de validação"
     *     )
     * )
     */
    public function store(StoreTagRequest $request): TagResource
    {
        $dto = TagDTO::fromRequest($request->validated());
        $tag = $this->tagService->createTag($dto);
        
        return new TagResource($tag);
    }

    /**
     * @OA\Get(
     *     path="/api/tags/{id}",
     *     operationId="getTagById",
     *     tags={"Tags"},
     *     summary="Obter informações da tag",
     *     description="Retorna dados da tag por ID ou slug",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID ou slug da tag",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Operação realizada com sucesso",
     *         @OA\JsonContent(ref="#/components/schemas/TagResource")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Tag não encontrada"
     *     )
     * )
     */
    public function show(Tag $tag): TagResource
    {
        return new TagResource($tag);
    }

    /**
     * @OA\Put(
     *     path="/api/tags/{id}",
     *     operationId="updateTag",
     *     tags={"Tags"},
     *     summary="Atualizar tag existente",
     *     description="Atualiza dados da tag e retorna as informações atualizadas",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID da tag",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/UpdateTagRequest")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Tag atualizada com sucesso",
     *         @OA\JsonContent(ref="#/components/schemas/TagResource")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Tag não encontrada"
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Erro de validação"
     *     )
     * )
     */
    public function update(UpdateTagRequest $request, Tag $tag): TagResource
    {
        $dto = TagDTO::fromRequest($request->validated());
        $updatedTag = $this->tagService->updateTag($tag, $dto);
        
        return new TagResource($updatedTag);
    }

    /**
     * @OA\Delete(
     *     path="/api/tags/{id}",
     *     operationId="deleteTag",
     *     tags={"Tags"},
     *     summary="Excluir tag",
     *     description="Exclui uma tag e remove seus relacionamentos com posts",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID da tag",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=204,
     *         description="Tag excluída com sucesso"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Tag não encontrada"
     *     )
     * )
     */
    public function destroy(Tag $tag): JsonResponse
    {
        $this->tagService->deleteTag($tag);
        
        return response()->json(null, 204);
    }

    /**
     * @OA\Get(
     *     path="/api/tags/popular",
     *     operationId="getPopularTags",
     *     tags={"Tags"},
     *     summary="Obter tags mais utilizadas",
     *     description="Retorna lista das tags mais utilizadas ordenadas por quantidade de posts",
     *     @OA\Parameter(
     *         name="limit",
     *         in="query",
     *         description="Número máximo de tags a retornar",
     *         required=false,
     *         @OA\Schema(type="integer", default=10)
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Operação realizada com sucesso",
     *         @OA\JsonContent(ref="#/components/schemas/TagResource")
     *     )
     * )
     */
    public function popular(): AnonymousResourceCollection
    {
        $limit = request('limit', 10);
        $tags = $this->tagService->getMostUsedTags($limit);
        
        return TagResource::collection($tags);
    }

    /**
     * @OA\Get(
     *     path="/api/tags/search",
     *     operationId="searchTags",
     *     tags={"Tags"},
     *     summary="Buscar tags",
     *     description="Busca tags por nome ou descrição",
     *     @OA\Parameter(
     *         name="q",
     *         in="query",
     *         description="Termo de busca",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Operação realizada com sucesso",
     *         @OA\JsonContent(ref="#/components/schemas/TagResource")
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Termo de busca é obrigatório"
     *     )
     * )
     */
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