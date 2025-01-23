<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    
    protected $fillable = [
        'clima_id',
        'contenido',
    ];

    public function clima()
    {
        return $this->belongsTo(Clima::class);
    }
}
