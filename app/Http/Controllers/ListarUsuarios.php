<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuario;

class ListarUsuarios extends Controller
{
    public function listarUsuarios(){
        $usuarios=usuario::all();
        return view("sistema.listar-usuarios",["usuarios"=>$usuarios]);
    }
}
