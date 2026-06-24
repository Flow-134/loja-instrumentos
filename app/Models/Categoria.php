<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = ['nome'];

    use App\Models\Categoria;

public function edit(Instrumentos $instrumento)
{
    $categorias = Categoria::all();

    return view(
        'instrumentos.edit',
        compact('instrumento', 'categorias')
    );
}
}
    
    
    


    
    

