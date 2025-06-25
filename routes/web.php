<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

Route::get('/', function () {
    return view('index');
})->name('index');

// Route::get('/produtos', function () {
//     return view('produtos');
// })->name('produtos');

Route::post('/cadastro', [UsuarioController::class, 'store'])->name('cadastro.usuario');

Route::get('/historia', function () {
    return view('historia');
})->name('historia');

Route::get('/localizacao', function () {
    return view('localizacao');
})->name('localizacao');

Route::get('/produtos', [ProdutoController::class, 'index'])->name('produtos');