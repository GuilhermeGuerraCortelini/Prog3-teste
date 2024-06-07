<?php

namespace App\Http\Controllers; // encontrar o arquivo automaticamente

use Illuminate\Http\Request;

class AnimaisController extends Controller
{
    public function index(){
        return view('animais.index');
        // criar rota
    }

    public function cadastrar(){
        return view('animais.cadastrar');
    }
}
