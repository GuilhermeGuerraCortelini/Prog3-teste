<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index(){
        // acessar estático ::
        $dados = Usuario::all();
        #dd($dados); // ter certeza que os dados estão vindo
        return view('usuarios.index', [
            'usuarios' => $dados,
        ]);
    }

    public function cadastrar(){
        return view('usuarios.cadastrar');
    }

    public function gravar(){
        return redirect()->route('usuarios');
    }

    public function alterar(){
        return view('usuario.alterar', [
            'usuario' => $usuario
        ]);
    }

    public function alterarGravar(){
        return view('usuarios.alterar');
    }
    
}
