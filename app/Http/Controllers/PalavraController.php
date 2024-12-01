<?php

namespace App\Http\Controllers;

use App\Models\Palavra;
use Illuminate\Http\Request;

class PalavraController extends Controller
{
    public function show($id)
    {

        $palavra = Palavra::with(['categoria'])->findOrFail($id);

        $relatedPalavras = Palavra::whereHas('categoria', function ($query) use ($palavra) {
            $query->where('id', $palavra->categoria->id);
        })->orderBy('palavra', 'asc')->get();


        return view('palavra', compact('palavra', 'relatedPalavras'));
    }
}
