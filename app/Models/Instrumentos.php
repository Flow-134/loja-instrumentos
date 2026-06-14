<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;

class Instrumentos extends Model
{
    protected $fillable = [
        'nome',
        'marca',
        'preco',
        'categoria_id'
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function instrumentos()
    {
        return $this->hasMany(Instrumentos::class);
    }
}