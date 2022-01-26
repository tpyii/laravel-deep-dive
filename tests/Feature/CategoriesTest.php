<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoriesTest extends TestCase
{
    public function test_route_index()
    {
        $response = $this->get(route('categories.index'));

        $response->assertStatus(200);
    }
}
