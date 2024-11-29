<?php

namespace App\Http\Controllers;

use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::orderBy('titulo','asc')->get();
        return view('categorias', compact('categorias'));
    }
    public function show($id)
    {
        $categoria = Categoria::with('palavras')->findOrFail($id);
        return view('categoria', compact('categoria'));
    }
}
