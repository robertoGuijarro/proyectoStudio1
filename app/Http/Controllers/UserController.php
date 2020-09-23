<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{


    public function index(){
		
		if (request()->has('empty')){

			$users = [];

		}else{
			$users = [
			'joel',
			'carlos',
			'mauricio',
		];
		
		$title = 'Listado de usuarios';


        return view('users')
		->with('users', $users)
		->with('title', $title);
		
		
		}


    }

	/**
	//muestra los datos de las variables
	*dd(compact('title', 'users'))
	*return view ('users', compact('title', 'users'));
	*/
/**
    public function index(){
		
		$users = [
			'joel',
			'carlos',
			'mauricio',
		];
		

        return view('users', [
			'users' => $users,

			'title' => 'listado de usuarios'
		]);
    }
	*/
    public function show($id)
    {
        return "Mostrar detalle del usuario: {$id}";
    }

    public function create()
    {
        return "Nuevo usuario";
    }
}
