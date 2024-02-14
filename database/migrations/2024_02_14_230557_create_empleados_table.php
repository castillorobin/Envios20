<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('correo');
            $table->string('contrasena');
            $table->string('confirmar_contrasena');
            $table->string('foto');
            $table->string('telefono');
            $table->string('whatsapp');
            $table->date('fecha_nacimiento');
            $table->string('dui');
            $table->text('direccion');
            $table->string('cargo');
            $table->date('fecha_alta');
            $table->string('n_isss');
            $table->string('n_afp');
            $table->string('agencia_registro');
            $table->text('nota');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
