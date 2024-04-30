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
            $table->string('direccion')->nullable();
            $table->string('telefono')->nullable();
            $table->string('whatsapp')->nullable();
            $table->date('f_alta');
            $table->date('f_baja')->nullable();
            $table->string('tipo');
            $table->string('correo')->nullable();
            $table->string('estado')->nullable();
            $table->string('nota')->nullable();
            $table->string('agencia');
            $table->string('titular')->nullable();
            $table->string('banco')->nullable();
            $table->string('cuenta')->nullable();
            $table->string('tipo_cuenta')->nullable();
            $table->string('chivo')->nullable();
            $table->string('tigo')->nullable();
            $table->string('empresa')->nullable();
            $table->string('giro')->nullable();
            $table->string('tipo_contri')->nullable();
            $table->string('dui')->nullable();
            $table->string('iva')->nullable();
            $table->string('nrc')->nullable();
            $table->string('d_fiscal')->nullable();
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
