<?php

namespace App\Http\Controllers;

use App\Models\Palavra;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(){
        $palavras = Palavra::with(['categoria'])->where("palavra","LIKE","%".request('q')."%")->get();
        return view('results',['palavras' => $palavras]);
    }
}
