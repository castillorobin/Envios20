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
            $table->string('guia')->nullable();
            $table->string('ticketc');
            $table->string('comercio');
            $table->string('destinatario')->nullable();
            $table->string('direccion')->nullable();
            $table->string('dircomercio')->nullable();
            $table->string('telefono')->nullable();
            $table->string('cobro')->nullable();
            $table->double('precio')->nullable();
            $table->double('envio')->nullable();
            $table->double('total')->nullable();
            $table->string('repartidor')->nullable();
            $table->string('estado')->nullable();
            $table->string('pago')->nullable();
            $table->string('tipo')->nullable();
            $table->date('fecha_entrega')->nullable();
            $table->string('nota')->nullable();
            $table->string('entrega')->nullable();
            $table->integer('punto')->nullable();
            $table->integer('registro')->nullable();
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
