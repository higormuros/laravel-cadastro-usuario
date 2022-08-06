<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NovoUsuario extends Controller
{
    public function novoUsuario(){
        return view("sistema.novo-usuario");
    }
}
