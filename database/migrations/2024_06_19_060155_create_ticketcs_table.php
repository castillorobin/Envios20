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
        Schema::create('ticketcs', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('comercio');
            $table->string('correo')->nullable();
            $table->string('telefono')->nullable();
            $table->integer('perso')->nullable();
            $table->integer('punto')->nullable();
            $table->integer('casil')->nullable();
            $table->integer('depar')->nullable();
            $table->integer('guias')->nullable();
            $table->double('persoi')->nullable();
            $table->double('puntoi')->nullable();
            $table->double('casili')->nullable();
            $table->double('depari')->nullable();
            $table->double('guiasi')->nullable();
            $table->double('iva')->nullable();
            $table->double('total')->nullable();
            $table->string('metodo')->nullable();
            $table->double('entrega')->nullable();
            $table->double('cambio')->nullable();
            $table->string('cajero')->nullable();
            $table->string('local')->nullable();
            $table->string('estado')->nullable();
            $table->string('direccion')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ticketcs');
    }
};
