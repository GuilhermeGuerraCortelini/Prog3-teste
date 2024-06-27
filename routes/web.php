<?php

use App\Http\Controllers\hoteisController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hoteis', [hoteisController::class, 'index'])->name('hoteis');


// duas 
Route::get('/hoteis/cadastrar', [hoteisController::class, 'cadastrar'])->name('hoteis.cadastrar');
Route::post('/hoteis/cadastrar', [hoteisController::class, 'gravar'])->name('hoteis.gravar');

Route::get('/hoteis/apagar/{hotel}', [hoteisController::class, 'apagar'])->name('hoteis.apagar');
Route::delete('/hoteis/apagar/{hotel}', [hoteisController::class, 'apagar']);