<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Empleado;

class Envio extends Model
{
    use HasFactory;

    public function empleados()
{
    return $this->belongsToMany(Empleado::class)->withTimestamps();
}
}

