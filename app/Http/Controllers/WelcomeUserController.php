<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
       public function Hola ($name, $nickname = null){

        if ($nickname) {
            return "Bienvenido {$name}, tu apodo es {$nickname}";
        } else {
            return "Bienvenido {$name}";
        }
    }
}
