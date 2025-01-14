<?php

namespace App\Models\Funcionario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;
    protected $fillable = [
        "nome",
        "sobrenome",
        "data",
        "genero",
        "cargo",
        "email",
        "senha",
        "telefone",
        "nacionalidade"
    ];
}
