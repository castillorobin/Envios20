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
            $table->string('foto')->nullable();
            $table->string('direccion');
            $table->string('agencia');
            $table->string('telefono');
            $table->string('whatsapp')->nullable();
            $table->string('correo');
            $table->date('fecha_nacimiento');
            $table->string('dui');
            $table->string('licencia')->nullable();
            $table->string('referenciap');
            $table->string('telefonop');
            $table->string('referenciaf');
            $table->string('telefonof');
            $table->string('contactonombre');
            $table->string('contactotel');
            $table->string('cargo');
            $table->date('fecha_alta');
            $table->string('n_isss')->nullable();
            $table->string('n_afp')->nullable();
            $table->date('fecha_baja')->nullable();
            $table->string('motivo')->nullable();
            $table->string('salario')->nullable();
            $table->string('estado');
            $table->text('nota')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
