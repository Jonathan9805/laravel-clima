<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class ClimaService
{
    public static function obtenerClima($ciudad)
    {
        $apiKey = env('OPENWEATHER_API_KEY');
        $url = "http://api.openweathermap.org/data/2.5/weather?q={$ciudad}&appid={$apiKey}&units=metric";
        
        $response = Http::get($url);

        if ($response->successful()) {
            return $response->json();
        }

        return null; 
    }
}