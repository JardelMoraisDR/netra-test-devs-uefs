<?php

namespace App\DTOs;

class UserDTO
{
    public function __construct(
        public readonly ?string $name = null,
        public readonly ?string $email = null,
        public readonly ?string $password = null,
    ) {
    }

    public static function fromRequest(array $data): self
    {
        return new self(
            name: $data['name'] ?? null,
            email: $data['email'] ?? null,
            password: $data['password'] ?? null,
        );
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->name !== null) {
            $data['name'] = $this->name;
        }

        if ($this->email !== null) {
            $data['email'] = $this->email;
        }

        if ($this->password !== null) {
            $data['password'] = bcrypt($this->password);
        }

        return $data;
    }

    public function isValidForCreate(): bool
    {
        return !empty($this->name) && 
               !empty($this->email) && 
               filter_var($this->email, FILTER_VALIDATE_EMAIL) &&
               !empty($this->password);
    }

    public function isValidForUpdate(): bool
    {
        return $this->name !== null || 
               $this->email !== null || 
               $this->password !== null;
    }

    public function hasDataToUpdate(): bool
    {
        return !empty($this->toArray());
    }
}