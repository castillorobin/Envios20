<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detallecaja extends Model
{
    protected $fillable = [
        'cajero',
        'agencia',
        'tipo',
        'concepto',
        'valor',
        'idcaja'
    ];

    use HasFactory;
}
