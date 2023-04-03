<?php

namespace Tests\Feature\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BookTest extends TestCase
{
    public function test_getAllBooks()
    {
        $response = $this->get('/api/books');

        $response->assertStatus(200)
            ->assertJson([
                'data' => []
            ]);
    }

    public function test_StoreBook() {
        $response = $this->post('/api/books', [
            'title' => 'Testowy tytuł',
            'category_id' => '1',
            'author_ids' => '1'
        ]);

        $response->assertStatus(201);
    }
}
