<?php

namespace App\Http\Controllers;
use App\Models\lectura;

use Illuminate\Http\Request;

class LecturaController extends Controller
{
    //
    public function promedios($id)
    {
        $lecturas = lectura::where('id', $id)
            ->orderByDesc('fecha')
            ->take(500)
            ->get();

        if ($lecturas->isEmpty()) {
            return response()->json([
                'message' => 'No se encontraron lecturas para este sensor.'
            ], 404);
        }

        $promedios = [
            'temperatura' => round($lecturas->avg('temperatura'), 2),
            'humedad' => round($lecturas->avg('humedad'), 2),
            'luminosidad' => round($lecturas->avg('luminosidad'), 2),
            'phsuelo' => round($lecturas->avg('phsuelo'), 2),
        ];

        return response()->json($promedios);
    }
}
