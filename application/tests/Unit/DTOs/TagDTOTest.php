<?php

namespace Tests\Unit\DTOs;

use App\DTOs\TagDTO;
use Illuminate\Support\Str;
use PHPUnit\Framework\TestCase;

class TagDTOTest extends TestCase
{
    public function test_from_request_with_name_generates_slug()
    {
        $dto = TagDTO::fromRequest([
            'name' => 'Nova Tag',
            'color' => '#ff0000',
        ]);

        $this->assertEquals('Nova Tag', $dto->name);
        $this->assertEquals(Str::slug('Nova Tag'), $dto->slug);
        $this->assertEquals('#ff0000', $dto->color);
        $this->assertNull($dto->description);
    }

    public function test_from_request_with_explicit_slug()
    {
        $dto = TagDTO::fromRequest([
            'name' => 'Nova Tag',
            'slug' => 'tag-personalizada',
        ]);

        $this->assertEquals('tag-personalizada', $dto->slug);
    }

    public function test_to_array_returns_only_filled_fields()
    {
        $dto = new TagDTO(name: 'Teste', color: '#000');
        $array = $dto->toArray();

        $this->assertArrayHasKey('name', $array);
        $this->assertArrayHasKey('color', $array);
        $this->assertArrayNotHasKey('slug', $array);
        $this->assertArrayNotHasKey('description', $array);
    }

    public function test_is_valid_for_create()
    {
        $dto = new TagDTO(name: 'Nova Tag');
        $this->assertTrue($dto->isValidForCreate());

        $dto2 = new TagDTO(); // sem name
        $this->assertFalse($dto2->isValidForCreate());
    }

    public function test_is_valid_for_update()
    {
        $dto = new TagDTO(name: 'Atualizado');
        $this->assertTrue($dto->isValidForUpdate());

        $dto2 = new TagDTO(); // nenhum campo preenchido
        $this->assertFalse($dto2->isValidForUpdate());
    }

    public function test_has_data_to_update()
    {
        $dto = new TagDTO(description: 'Nova descrição');
        $this->assertTrue($dto->hasDataToUpdate());

        $dto2 = new TagDTO();
        $this->assertFalse($dto2->hasDataToUpdate());
    }
}
