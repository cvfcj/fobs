<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
<<<<<<< HEAD
//        $response = $this->get('/');
//
//        $response->assertStatus(200);
=======
        $response = $this->get('/');

        $response->assertStatus(200);
>>>>>>> 271045b73ed3c80c0343c05a32ccacbf3e8f512c
    }
}
