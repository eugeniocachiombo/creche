<?php

namespace App\Http\Controllers\Funcionario;

use App\Http\Controllers\Controller;
use App\Models\Funcionario\Funcionario;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function cadastrarFuncionario()
    {
        return view("funcionario.formCadastro");
    }
    public function salvarCadastroFuncionario(Request $request)
    {
        $dados = [
            "nome" => $request->nome,
            "sobrenome" => $request->sobrenome,
            "data" => $request->data,
            "genero" => $request->genero,
            "cargo" => $request->cargo,
            "email" => $request->email,
            "senha" => $request->senha,
            "telefone" => $request->telefone,
            "nacionalidade" => $request->nacionalidade,
        ];
        if (Funcionario::create($dados)) {
            session()->flash('sucesso', 'Cadastrado com sucesso');
        }
        return view("funcionario.formCadastro");
    }
}
