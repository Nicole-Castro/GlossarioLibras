<?php

use Illuminate\Support\Facades\Route;
use App\Models\Categoria;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PalavraController;
use App\Http\Controllers\SearchController;

Route::get('/', function () {
    return view('home');
});


Route::get('/categorias', [CategoriaController::class, 'index'])->name('categorias.index');

Route::get('/search', SearchController::class);

Route::get('/categorias/{id}', [CategoriaController::class, 'show'])->name('categorias.show');

Route::get('/palavras/{id}', [PalavraController::class, 'show'])->name('palavras.show');
