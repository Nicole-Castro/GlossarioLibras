<?php

namespace App\Http\Controllers;

use App\Models\Palavra;
use Illuminate\Http\Request;

class PalavraController extends Controller
{
    public function show($id) { 
        $palavra = Palavra::findOrFail($id); return view('palavra', compact('palavra')); 
    }
}
