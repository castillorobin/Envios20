<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 'correo', 'contrasena', 'confirmar_contrasena', 'foto', 'telefono', 'whatsapp', 'fecha_nacimiento', 'dui', 'direccion', 'cargo', 'fecha_alta', 'n_isss', 'n_afp', 'agencia_registro', 'nota'
    ];
}
