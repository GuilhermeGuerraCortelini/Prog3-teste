<?php

namespace App\Http\Controllers; // encontrar o arquivo automaticamente

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimaisController extends Controller
{
public function index(){
    // acessar estático ::
    $dados = Animal::all();
    #dd($dados); // ter certeza que os dados estão vindo
    return view('animais.index', [
        'animais' => $dados,
    ]);
    // criar rota
}

public function cadastrar(){
    return view('animais.cadastrar');
}

// Resquest deixa mais automático
    public function gravar(Request $form){
        #dd($form);
        #echo $form->nome;
        $dados = $form->validate([
            'nome' => 'required|min:3',
            'idade' => 'required|integer'
        ]);

        Animal::create($dados);
        
        return redirect()->route('animais');
    }

    public function apagar(Animal $animal) {
        #dd($animal);
        return view('animais.apagar', [
            'animal' => $animal,
        ]);
    }
}
