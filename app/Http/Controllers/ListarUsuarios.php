<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListarUsuarios extends Controller
{
    public function listarUsuarios(){
        return view("sistema.listar-usuarios");
    }
}
