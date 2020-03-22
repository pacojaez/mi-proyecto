<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsersModuleTest extends TestCase
{
    /***
    @test
    */
    function test_if_usuarios_load_list_page()
    {
        $this->get('/usuarios')
        ->assertStatus(200)
        ->assertSee('paco');
    }

    /***
    @test
    */
    function test_if_a_default_message_is_shown_if_no_users()
    {
        $this->get('/usuarios?empty')
        ->assertStatus(200)
        ->assertSee('NO HAY REGISTROS');
    }
    /** @test */
    function test_if_usuarios_load_detail_page()
    {
        $this->get('/usuarios/5')
        ->assertStatus(200)
        ->assertSee('Detalle usuario');
    }
    /*** @test */
    function test_if_usuarios_load_new_usuario_page()
    {
        $this->get('/usuarios/nuevo')
        ->assertStatus(200)
        ->assertSee('FORM PARA NUEVO USUARIO');
    }

}
