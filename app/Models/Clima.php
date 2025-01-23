<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clima extends Model
{
    protected $fillable = [
        'ciudad',
        'temperatura',
        'temperatura_max',
        'temperatura_min',
        'humedad',
    ];

    protected $appends = ['temperatura_fahrenheit'];

    public function getTemperaturaFahrenheitAttribute()
    {
        return ($this->temperatura * 9 / 5) + 32;
    }

    public function comentarios()
    {
        return $this->hasMany(Comentario::class);
    }
}
