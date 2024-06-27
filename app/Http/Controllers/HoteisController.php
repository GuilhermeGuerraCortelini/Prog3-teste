<?php

namespace App\Http\Controllers; // encontrar o arquivo automaticamente

use App\Models\Hotel;
use Illuminate\Http\Request;

class HoteisController extends Controller
{
public function index(){
    // acessar estático ::
    $dados = Hotel::all();
    #dd($dados); // ter certeza que os dados estão vindo
    return view('hoteis.index', [
        'hoteis' => $dados,
    ]);
    // criar rota
}

public function cadastrar(){
    return view('hoteis.cadastrar');
}

// Resquest deixa mais automático
    public function gravar(Request $form){
        #dd($form);
        #echo $form->nome;
        $dados = $form->validate([
            // Campos no banco: id, nome, cidade, país, estrelas, valor da diária e comodidades.
            'nome' => 'required|min:3',
            'cidade' => 'required|min:3',
            'pais' => 'required|min:3',
            'estrelas' => 'required|integer',
            'valorDiaria' => 'required|integer',
            'comodidades' => 'required|min:3',
        ]);

        Hotel::create($dados);
        
        return redirect()->route('hoteis');
    }

    public function apagar(Hotel $hotel) {
        #dd($hotel);
        return view('hoteis.apagar', [
            'hotel' => $hotel,
        ]);
    }
}
