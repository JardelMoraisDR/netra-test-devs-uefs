<?php

namespace App\Http\Controllers\Api;

use App\DTOs\UserDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\StoreUserRequest;
use App\Http\Requests\Api\UpdateUserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function __construct(
        private UserService $userService
    ) {
    }

    public function index(): AnonymousResourceCollection
    {
        $perPage = request('per_page', 15);
        $users = $this->userService->getAllUsers($perPage);
        
        return UserResource::collection($users);
    }

    public function store(StoreUserRequest $request): UserResource
    {
        $dto = UserDTO::fromRequest($request->validated());
        if (!$dto->isValidForCreate()) {
            throw new ValidationException('Dados obrigatórios ausentes');
        }

        $user = $this->userService->createUser($dto);
        
        return new UserResource($user);
    }

    public function show(User $user): UserResource
    {
        return new UserResource($user);
    }

    public function update(UpdateUserRequest $request, User $user): UserResource
    {
        $dto = UserDTO::fromRequest($request->validated());
        if (!$dto->isValidForUpdate()) {
            throw new ValidationException('Nenhum dado para atualizar');
        }

        $updatedUser = $this->userService->updateUser($user, $dto);
        
        return new UserResource($updatedUser);
    }

    public function destroy(User $user): JsonResponse
    {
        $this->userService->deleteUser($user);
        
        return response()->json(null, 204);
    }
}