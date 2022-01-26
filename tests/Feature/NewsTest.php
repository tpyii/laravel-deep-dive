<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NewsTest extends TestCase
{
    public function test_route_index()
    {
        $response = $this->get(route('news.index'));

        $response->assertStatus(200);
    }

    public function test_route_news_by_category()
    {
        $response = $this->get(route('category.news.index', ['category' => mt_rand(1, 5)]));

        $response->assertStatus(200);
    }

    public function test_route_show()
    {
        $response = $this->get(route('news.show', ['news' => mt_rand(1, 10)]));

        $response->assertStatus(200);
    }
}
