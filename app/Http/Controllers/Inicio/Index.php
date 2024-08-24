<?php

namespace App\Http\Controllers\Inicio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Index extends Controller
{
    public function index(){
        return view("inicio.index");
    }

    public function paginaInicial(){
        return view("inicio.paginaInicial");
    }
}
