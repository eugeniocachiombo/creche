<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Inicio\Index;

Route::get('/', [Index::class, "index"]);
Route::get('/inicio', [Index::class, "paginaInicial"]);




