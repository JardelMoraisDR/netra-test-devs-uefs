<?php

namespace Tests\Unit\DTOs;

use App\DTOs\PostDTO;
use Illuminate\Support\Str;
use PHPUnit\Framework\TestCase;

class PostDTOTest extends TestCase
{
    public function test_from_request_generates_slug_if_title_exists()
    {
        $dto = PostDTO::fromRequest([
            'user_id' => '123',
            'title' => 'Título do Post',
        ]);

        $this->assertEquals('123', $dto->user_id);
        $this->assertEquals('Título do Post', $dto->title);
        $this->assertEquals(Str::slug('Título do Post'), $dto->slug);
    }

    public function test_from_request_uses_provided_slug_if_exists()
    {
        $dto = PostDTO::fromRequest([
            'title' => 'Algum Título',
            'slug' => 'meu-slug-personalizado',
        ]);

        $this->assertEquals('meu-slug-personalizado', $dto->slug);
    }

    public function test_to_array_returns_only_non_null_fields()
    {
        $dto = new PostDTO(
            user_id: 'abc',
            title: 'Título',
            status: 'published'
        );

        $array = $dto->toArray();

        $this->assertArrayHasKey('user_id', $array);
        $this->assertArrayHasKey('title', $array);
        $this->assertArrayHasKey('status', $array);
        $this->assertArrayNotHasKey('slug', $array);
        $this->assertArrayNotHasKey('content', $array);
    }

    public function test_is_valid_for_create()
    {
        $dto = new PostDTO(user_id: 'abc', title: 'Título');
        $this->assertTrue($dto->isValidForCreate());

        $dto2 = new PostDTO(); // incompleto
        $this->assertFalse($dto2->isValidForCreate());
    }

    public function test_get_post_data_excludes_tag_ids()
    {
        $dto = new PostDTO(
            title: 'Post com tags',
            tag_ids: ['1', '2', '3'],
            content: 'Lorem ipsum'
        );

        $postData = $dto->getPostData();

        $this->assertArrayHasKey('title', $postData);
        $this->assertArrayHasKey('content', $postData);
        $this->assertArrayNotHasKey('tag_ids', $postData);
    }
}
