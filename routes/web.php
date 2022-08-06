<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix("/app")->group(function(){
    Route::get("/listar-usuarios",[\App\Http\Controllers\ListarUsuarios::class,"listarUsuarios"])->name("sistema.listar");
    Route::get("/ver-usuario",[\App\Http\Controllers\VerUsuario::class,"verUsuario"])->name("sistema.ver");
    Route::get("/novo-usuario",[\App\Http\Controllers\NovoUsuario::class,"novoUsuario"])->name("sistema.novo");
});

