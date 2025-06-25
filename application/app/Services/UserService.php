<?php

namespace App\Services;

use App\DTOs\UserDTO;
use App\Models\User;
use App\Repositories\Contracts\UserRepositoryInterface;
use Illuminate\Pagination\LengthAwarePaginator;

class UserService
{
    public function __construct(
        private UserRepositoryInterface $userRepository
    ) {
    }

    public function getAllUsers(int $perPage = 15): LengthAwarePaginator
    {
        return $this->userRepository->paginate($perPage);
    }

    public function getUserById(int $id): ?User
    {
        return $this->userRepository->findById($id);
    }

    public function createUser(UserDTO $dto): User
    {
        return $this->userRepository->create($dto->toArray());
    }

    public function updateUser(User $user, UserDTO $dto): User
    {
        if (!$dto->hasDataToUpdate()) {
            return $user;
        }

        return $this->userRepository->update($user, $dto->toArray());
    }

    public function deleteUser(User $user): bool
    {
        return $this->userRepository->delete($user);
    }
}