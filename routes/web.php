<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Inicio\Index;
use App\Http\Controllers\Aluno\AlunoController;
use App\Http\Controllers\Funcionario\FuncionarioController;


Route::get('/', [Index::class, "index"]);
Route::get('/inicio', [Index::class, "paginaInicial"]);
Route::get('/aluno/cadastro', [AlunoController::class, "cadastrarAluno"]);

Route::get('/funcionario/cadastro', [FuncionarioController::class, "cadastrarFuncionario"]);




