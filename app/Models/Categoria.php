<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Categoria extends Model{
    public function palavras(){
        return $this->hasMany(Palavra::class);
    }
}