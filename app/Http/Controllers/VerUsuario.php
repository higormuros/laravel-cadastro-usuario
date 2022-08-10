<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuario;

class VerUsuario extends Controller
{
    public function verUsuario($id){
        $usuario=usuario::find($id);
        //dd($usuario);
        return view("sistema.ver-usuario",["usuario"=>$usuario]);
    }
}
