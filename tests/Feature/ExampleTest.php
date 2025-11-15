<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
<<<<<<< HEAD
    public function testBasicTest()
=======
    public function test_example()
>>>>>>> d2e81559bed91cfa69aa5464e60e1f2dd25bebf8
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
