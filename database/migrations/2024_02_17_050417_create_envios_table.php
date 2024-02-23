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
        Schema::create('envios', function (Blueprint $table) {
            $table->id();
            $table->string('guia');
            $table->string('destinatario');
            $table->string('direccion');
            $table->string('telefono');
            $table->double('cobro');
            $table->double('precio');
            $table->double('envio');
            $table->double('total');
            $table->string('estado');
            $table->string('pago');
            $table->string('tipo');
            $table->date('fecha_entrega');
            $table->string('nota');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('envios');
    }
};
