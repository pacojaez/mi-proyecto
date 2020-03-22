<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WelcomeUsersTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     */
     /** @test */
     function test_welcome_with_nick_name()
     {
         $this->get('/saludo/paco/anibal')
         ->assertStatus(200)
         ->assertSee('Hola Paco, tu nick es anibal');
     }
     /*** @test */
     function test_welcome_without_nick_name()
     {
      $this->withoutExceptionHandling();
       $this->get('/saludo/paco')
       ->assertStatus(200)
       ->assertSee('Hola Paco, no tienes nick');
     }

}
