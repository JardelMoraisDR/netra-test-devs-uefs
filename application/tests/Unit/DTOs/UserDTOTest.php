<?php

namespace Tests\Unit\DTOs;

use App\DTOs\UserDTO;
use PHPUnit\Framework\TestCase;

class UserDTOTest extends TestCase
{
    public function test_from_request_fills_properties_correctly()
    {
        $dto = UserDTO::fromRequest([
            'name' => 'Jardel',
            'email' => 'jardel@example.com',
            'password' => 'secret123',
        ]);

        $this->assertEquals('Jardel', $dto->name);
        $this->assertEquals('jardel@example.com', $dto->email);
        $this->assertEquals('secret123', $dto->password);
    }

    public function test_to_array_ignores_null_fields()
    {
        $dto = new UserDTO(name: 'Carlos');

        $array = $dto->toArray();

        $this->assertArrayHasKey('name', $array);
        $this->assertArrayNotHasKey('email', $array);
        $this->assertArrayNotHasKey('password', $array);
    }

    public function test_is_valid_for_create_returns_true_for_valid_data()
    {
        $dto = new UserDTO(
            name: 'João',
            email: 'joao@example.com',
            password: '123456'
        );

        $this->assertTrue($dto->isValidForCreate());
    }

    public function test_is_valid_for_create_returns_false_for_missing_data()
    {
        $this->assertFalse((new UserDTO())->isValidForCreate());
        $this->assertFalse((new UserDTO(name: 'Apenas nome'))->isValidForCreate());
        $this->assertFalse((new UserDTO(email: 'invalido'))->isValidForCreate());
    }

    public function test_is_valid_for_create_returns_false_for_invalid_email()
    {
        $dto = new UserDTO(
            name: 'Fulano',
            email: 'email-invalido',
            password: '123456'
        );

        $this->assertFalse($dto->isValidForCreate());
    }

    public function test_is_valid_for_update()
    {
        $dto = new UserDTO(name: 'Nome');
        $this->assertTrue($dto->isValidForUpdate());

        $dto2 = new UserDTO();
        $this->assertFalse($dto2->isValidForUpdate());
    }

    public function test_has_data_to_update()
    {
        $dto = new UserDTO(email: 'teste@teste.com');
        $this->assertTrue($dto->hasDataToUpdate());

        $dto2 = new UserDTO();
        $this->assertFalse($dto2->hasDataToUpdate());
    }
}
