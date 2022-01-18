<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FeedbackTest extends TestCase
{
    public function test_route_create()
    {
        $response = $this->get(route('feedback.create'));

        $response->assertStatus(200);
    }
}
