<?php

use App\Http\Controllers\hoteisController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { // página inicial
    return view('inicial');
})->name('index');

Route::get('/hoteis', [hoteisController::class, 'index'])->name('hoteis');

// Hoteis
Route::get('/hoteis/cadastrar', [hoteisController::class, 'cadastrar'])->name('hoteis.cadastrar');
Route::post('/hoteis/cadastrar', [hoteisController::class, 'gravar'])->name('hoteis.gravar');

Route::get('/hoteis/apagar/{hotel}', [hoteisController::class, 'apagar'])->name('hoteis.apagar');
Route::delete('/hoteis/apagar/{hotel}', [hoteisController::class, 'deletar']);

Route::get('/hoteis/alterar/{hotel}', [hoteisController::class, 'alterar'])->name('hoteis.alterar');
Route::put('/hoteis/alterar/{hotel}', [hoteisController::class, 'alterarGravar']);

# Usuários
Route::prefix('usuarios')->middleware('auth')->group(function() {

    Route::get('/', [UsuariosController::class, 'index'])->name('usuarios');

    Route::get('/cadastrar/', [UsuariosController::class, 'cadastrar'])->name('usuarios.cadastrar');
    Route::post('/cadastrar', [UsuariosController::class, 'gravar'])->name('usuarios.gravar');
    
    Route::get('/apagar/{usuario}', [UsuariosController::class, 'apagar'])->name('usuarios.apagar');
    Route::delete('/apagar/{usuario}', [UsuariosController::class, 'deletar']);

    Route::get('/alterar/{usuario}', [UsuariosController::class, 'alterar'])->name('usuarios.alterar');
    Route::put('/alterar/{usuario}', [UsuariosController::class, 'alterarGravar']);

});

#Login
Route::get('/login', [UsuariosController::class, 'login'])->name('login'); // alt + shift + baixo
Route::post('/login', [UsuariosController::class, 'login']);
Route::get('/logout', [UsuariosController::class, 'logout'])->name('logout');