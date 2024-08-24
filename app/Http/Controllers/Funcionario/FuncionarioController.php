<?php

namespace App\Http\Controllers\Funcionario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function cadastrarFuncionario(){
        return view("funcionario.formCadastro");
    }
}
