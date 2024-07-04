<?php

use App\Http\Controllers\hoteisController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { // página inicial
    return view('inicial');
})->name('index');

Route::get('/hoteis', [hoteisController::class, 'index'])->name('hoteis');


// duas 
Route::get('/hoteis/cadastrar', [hoteisController::class, 'cadastrar'])->name('hoteis.cadastrar');
Route::post('/hoteis/cadastrar', [hoteisController::class, 'gravar'])->name('hoteis.gravar');

Route::get('/hoteis/apagar/{hotel}', [hoteisController::class, 'apagar'])->name('hoteis.apagar');
Route::delete('/hoteis/apagar/{hotel}', [hoteisController::class, 'deletar']);

Route::get('/hoteis/alterar/{hotel}', [hoteisController::class, 'alterar'])->name('hoteis.alterar');
Route::put('/hoteis/alterar/{hotel}', [hoteisController::class, 'alterarGravar']);