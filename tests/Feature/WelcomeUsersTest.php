<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
    /** @test*/
    function welcome_usuarios_nickname()
    {
           $this->get('/saludo/carlos/garcia')
           ->assertStatus(200)
           ->assertSee("Bienvenido carlos, tu apodo es garcia");
    }
    /** @test*/
        function welcome_usuarios_nickname_sin()
    {
            $this->get('/saludo/carlos')
           ->assertStatus(200)
           ->assertSee("Bienvenido carlos");
    }
}
