<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsesModuleTests extends TestCase
{
    /** @test*/
    function usuarios()
    {
       $this->withoutExceptionHandling();//da errores en cmd

       $this->get('/usuarios')
       ->assertStatus(200)
       ->assertSee("Usuarios");
    }
    /** @test*/
    function usuarios_detalles(){
        $this->get('/usuarios/5')
        ->assertStatus(200)
        ->assertSee('Mostrar detalle del usuario: 5');
    }
    /** @test*/
    function usuarios_nuevo(){
        $this->get('/usuarios/nuevo')
        ->assertStatus(200)
        ->assertSee('Nuevo usuario');
    }
}