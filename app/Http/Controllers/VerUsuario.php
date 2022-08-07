<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerUsuario extends Controller
{
    public function verUsuario(){
        var_dump($_POST);
        return view("sistema.ver-usuario");
    }
}
