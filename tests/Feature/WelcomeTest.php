<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WelcomeTest extends TestCase
{
    public function test_route_welcome()
    {
        $response = $this->get(route('welcome'));

        $response->assertStatus(200);
    }
}
