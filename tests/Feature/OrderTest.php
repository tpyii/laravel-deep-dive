<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class OrderTest extends TestCase
{
    public function test_route_create()
    {
        $response = $this->get(route('order.create'));

        $response->assertStatus(200);
    }
}
