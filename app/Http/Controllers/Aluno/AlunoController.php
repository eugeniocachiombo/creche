<?php

namespace App\Http\Controllers\Aluno;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function cadastrarAluno(){
        return view("aluno.formCadastro");
    }
}
