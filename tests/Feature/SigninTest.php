<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SigninTest extends TestCase
{
    public function test_route_signin()
    {
        $response = $this->get(route('signin'));

        $response->assertStatus(200);
    }
}
