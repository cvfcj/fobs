<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
<<<<<<< HEAD
//        $this->get('/');
//
//        $this->assertEquals(
//            $this->app->version(), $this->response->getContent()
//        );
          $this->seeInDatabase('users', [
      'username' => 'jithendra@cloudjournee.com'
                                           ]);
=======
        $this->get('/');

        $this->assertEquals(
            $this->app->version(), $this->response->getContent()
        );
>>>>>>> 271045b73ed3c80c0343c05a32ccacbf3e8f512c
    }
}
