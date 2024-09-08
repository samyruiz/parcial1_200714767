<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        //crear un modelo (clase) archivo php, nombre de tabla, crear un controlador
        //return view('welcome_message'); //principal
        return view('vista_menu');
    }
}
