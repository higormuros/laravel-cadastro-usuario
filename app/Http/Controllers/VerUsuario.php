<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerUsuario extends Controller
{
    public function verUsuario(){
        return view("sistema.ver-usuario");
    }
}
