<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomePageTest extends TestCase
{
    public function test_home_page_loads_correctly()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}


