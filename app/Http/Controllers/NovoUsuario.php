<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuario;

class NovoUsuario extends Controller
{
    public function novoUsuario(){
        return view("sistema.novo-usuario"); 
    }
}
