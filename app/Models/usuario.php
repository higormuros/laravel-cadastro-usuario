<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    use HasFactory;
    //tabela correspondente no BD se chama usuarios
    //se tabela tivesse nome diferente, seria necessario usar o codigo abaixo para o Eloquent ORM encontrar a tabela:
    //protected $table = 'nome_da_tabela';
    protected $fillable = ["nome"];
}
