<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Dispositivo extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_dispositivo',
        'nombre_planta',
        'planta_seleccionada',
        'user_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}