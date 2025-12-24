<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destino extends Model
{
    use HasFactory;
    protected $table = 'destinos'; // Asegúrate que coincida con tu tabla

    protected $fillable = [
        'punto',
        'hora_llegada',
        'hora_retirada',
        'lugar_entrega',
        'dias',
        'archivo_dias',
    ];
}
