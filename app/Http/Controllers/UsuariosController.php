<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{
    public function index(){
        // acessar estático ::
        $dados = Usuario::orderBy('name', 'asc')->get(); // Ordem Alfabética 
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
            'email' => 'email|required|unique:usuarios', // não pode criar emails iguais
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
        // Usuario::create($dados);

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

    public function login(Request $form){ // pegar o Formulário
        if ($form->isMethod('POST')){ // se o request for post 
            $credenciais = $form->validate([
                'username' => 'required',
                'password' => 'required',
            ]);

            if(Auth::attempt($credenciais)) { // middleware de autenticação do laravel
                return redirect()->intended(route('index')); // intended "intencional"
            }else{
                return redirect()->route('login')->with('erro', 'Usuário ou senha inválidos');
            }
        }

        return view('usuarios.login'); // se for get
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('index');
    }
}
