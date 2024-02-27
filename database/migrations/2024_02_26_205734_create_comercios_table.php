<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('comercios', function (Blueprint $table) {
            $table->id();
            $table->string('comercio');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('whatsapp');
            $table->date('f_alta');
            $table->date('f_baja');
            $table->string('tipo');
            $table->string('correo');
            $table->string('estado');
            $table->string('nota');
            $table->string('agencia');
            $table->string('titular');
            $table->string('banco');
            $table->string('cuenta');
            $table->string('tipo_cuenta');
            $table->string('chivo');
            $table->string('tigo');
            $table->string('empresa');
            $table->string('giro');
            $table->string('tipo_contri');
            $table->string('dui');
            $table->string('iva');
            $table->string('nrc');
            $table->string('d_fiscal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comercios');
    }
};
