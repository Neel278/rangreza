<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoutingTest extends TestCase
{
    use RefreshDatabase;

    /** @test **/
    public function a_user_can_see_index_page()
    {
        $this->withoutExceptionHandling();
        $this->get('/')->assertStatus(200);
    }
}
