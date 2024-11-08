<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Palavra extends Model
{
    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
}
