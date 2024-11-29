<?php

namespace App\Http\Controllers;

use App\Models\Palavra;
use Illuminate\Http\Request;

class PalavraController extends Controller
{
    public function show($id)
    {
        $palavra = Palavra::with(['categoria'])->findOrFail($id); // Get the specific palavra by ID
        $relatedPalavras = Palavra::where('categoria_id', $palavra->categoria->id)
            ->orderBy('palavra', 'asc')
            ->get(); // Get all related palavras sorted alphabetically

        return view('palavra', compact('palavra', 'relatedPalavras'));
    }
}
