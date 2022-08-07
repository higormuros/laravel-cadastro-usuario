<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NovoUsuario extends Controller
{
    public function novoUsuario(){
        var_dump($_POST);
        return view("sistema.novo-usuario");
    }
}
