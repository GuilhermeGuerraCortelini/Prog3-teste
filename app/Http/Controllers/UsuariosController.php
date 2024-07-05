<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

    public function gravar(Request $form){
        $dados = $form->validate([
            // Campos no banco: id, nome, cidade, país, estrelas, valor da diária e comodidades.
            'name' => 'required',
            'email' => 'email|required',
            'username' => 'required|min:3',
            'password' => 'required|min:3',
            'admin' => 'boolean',
        ]);

        $dados['password'] = Hash::make($dados['password']);
        Usuario::create($dados);
        
        return redirect()->route('usuarios');
    }

    public function alterar(Usuario $usuario){
        return view('usuarios.alterar', [
            'usuario' => $usuario
        ]);
    }

    public function alterarGravar(Request $form, Usuario $usuario,){
        $dados = $form->validate([
            // Campos no banco: id, nome, cidade, país, estrelas, valor da diária e comodidades.
            'name' => 'required',
            'email' => 'email|required',
            'username' => 'required|min:3',
            'password' => 'required|min:3',
            'admin' => 'boolean',
        ]);

        $dados['password'] = Hash::make($dados['password']);
        
        $usuario->fill($dados);
        $usuario->save();

        return redirect()->route('usuarios');
    }
    
    public function apagar(Usuario $usuario) { // vai no banco e pega o id do usuario | apagar() mostra na tela as informações
        #dd($usuario);
        return view('usuarios.apagar', [
            'usuario' => $usuario,
        ]);
    }

    public function deletar(Usuario $usuario){ // deleta do banco de fato
        // dd($usuario);
        $usuario->delete();
        return redirect()->route('usuarios');
    }
}
