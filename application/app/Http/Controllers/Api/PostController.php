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

/**
 * @OA\Tag(
 *     name="Posts",
 *     description="Endpoints da API para gerenciamento de posts"
 * )
 */
class PostController extends Controller
{
    public function __construct(
        private PostService $postService
    ) {
    }

    /**
     * @OA\Get(
     *     path="/api/posts",
     *     operationId="getPostsList",
     *     tags={"Posts"},
     *     summary="Obter lista de posts",
     *     description="Retorna lista de posts com paginação",
     *     @OA\Parameter(
     *         name="per_page",
     *         in="query",
     *         description="Número de posts por página",
     *         required=false,
     *         @OA\Schema(type="integer", default=15)
     *     ),
     *     @OA\Parameter(
     *         name="status",
     *         in="query",
     *         description="Filtrar por status (published para apenas publicados)",
     *         required=false,
     *         @OA\Schema(type="string", enum={"published"})
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Operação realizada com sucesso",
     *         @OA\JsonContent(ref="#/components/schemas/PostResource")
     *     )
     * )
     */
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

    /**
     * @OA\Post(
     *     path="/api/posts",
     *     operationId="storePost",
     *     tags={"Posts"},
     *     summary="Criar novo post",
     *     description="Cria um novo post e retorna os dados do post",
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/StorePostRequest")
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Post criado com sucesso",
     *         @OA\JsonContent(ref="#/components/schemas/PostResource")
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Erro de validação"
     *     )
     * )
     */
    public function store(StorePostRequest $request): PostResource
    {
        $dto = PostDTO::fromRequest($request->validated());
        $post = $this->postService->createPost($dto);
        
        return new PostResource($post);
    }

    /**
     * @OA\Get(
     *     path="/api/posts/{id}",
     *     operationId="getPostById",
     *     tags={"Posts"},
     *     summary="Obter informações do post",
     *     description="Retorna dados do post por ID ou slug",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID ou slug do post",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Operação realizada com sucesso",
     *         @OA\JsonContent(ref="#/components/schemas/PostResource")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Post não encontrado"
     *     )
     * )
     */
    public function show(Post $post): PostResource
    {
        return new PostResource($post->load(['user', 'tags']));
    }

    /**
     * @OA\Put(
     *     path="/api/posts/{id}",
     *     operationId="updatePost",
     *     tags={"Posts"},
     *     summary="Atualizar post existente",
     *     description="Atualiza dados do post e retorna as informações atualizadas",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID do post",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/UpdatePostRequest")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Post atualizado com sucesso",
     *         @OA\JsonContent(ref="#/components/schemas/PostResource")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Post não encontrado"
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Erro de validação"
     *     )
     * )
     */
    public function update(UpdatePostRequest $request, Post $post): PostResource
    {
        $dto = PostDTO::fromRequest($request->validated());
        $updatedPost = $this->postService->updatePost($post, $dto);
        
        return new PostResource($updatedPost);
    }

    /**
     * @OA\Delete(
     *     path="/api/posts/{id}",
     *     operationId="deletePost",
     *     tags={"Posts"},
     *     summary="Excluir post",
     *     description="Exclui um post",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID do post",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=204,
     *         description="Post excluído com sucesso"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Post não encontrado"
     *     )
     * )
     */
    public function destroy(Post $post): JsonResponse
    {
        $this->postService->deletePost($post);
        
        return response()->json(null, 204);
    }

    /**
     * @OA\Post(
     *     path="/api/posts/{id}/publish",
     *     operationId="publishPost",
     *     tags={"Posts"},
     *     summary="Publicar post",
     *     description="Publica um post definindo status como published e data de publicação",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID do post",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Post publicado com sucesso",
     *         @OA\JsonContent(ref="#/components/schemas/PostResource")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Post não encontrado"
     *     )
     * )
     */
    public function publish(Post $post): PostResource
    {
        $publishedPost = $this->postService->publishPost($post);
        
        return new PostResource($publishedPost);
    }

    /**
     * @OA\Post(
     *     path="/api/posts/{id}/unpublish",
     *     operationId="unpublishPost",
     *     tags={"Posts"},
     *     summary="Despublicar post",
     *     description="Despublica um post definindo status como draft",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID do post",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Post despublicado com sucesso",
     *         @OA\JsonContent(ref="#/components/schemas/PostResource")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Post não encontrado"
     *     )
     * )
     */
    public function unpublish(Post $post): PostResource
    {
        $unpublishedPost = $this->postService->unpublishPost($post);
        
        return new PostResource($unpublishedPost);
    }

    /**
     * @OA\Get(
     *     path="/api/users/{userId}/posts",
     *     operationId="getPostsByUser",
     *     tags={"Posts"},
     *     summary="Obter posts por usuário",
     *     description="Retorna lista de posts de um usuário específico",
     *     @OA\Parameter(
     *         name="userId",
     *         in="path",
     *         description="ID do usuário",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Parameter(
     *         name="per_page",
     *         in="query",
     *         description="Número de posts por página",
     *         required=false,
     *         @OA\Schema(type="integer", default=15)
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Operação realizada com sucesso",
     *         @OA\JsonContent(ref="#/components/schemas/PostResource")
     *     )
     * )
     */
    public function getByUser(string $userId): AnonymousResourceCollection
    {
        $perPage = request('per_page', 15);
        $posts = $this->postService->getPostsByUser($userId, $perPage);
        
        return PostResource::collection($posts);
    }

    /**
     * @OA\Get(
     *     path="/api/tags/{tagId}/posts",
     *     operationId="getPostsByTag",
     *     tags={"Posts"},
     *     summary="Obter posts por tag",
     *     description="Retorna lista de posts de uma tag específica",
     *     @OA\Parameter(
     *         name="tagId",
     *         in="path",
     *         description="ID da tag",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Parameter(
     *         name="per_page",
     *         in="query",
     *         description="Número de posts por página",
     *         required=false,
     *         @OA\Schema(type="integer", default=15)
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Operação realizada com sucesso",
     *         @OA\JsonContent(ref="#/components/schemas/PostResource")
     *     )
     * )
     */
    public function getByTag(string $tagId): AnonymousResourceCollection
    {
        $perPage = request('per_page', 15);
        $posts = $this->postService->getPostsByTag($tagId, $perPage);
        
        return PostResource::collection($posts);
    }
}