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
            $table->integer('perso');
            $table->integer('punto');
            $table->integer('casil');
            $table->integer('depar');
            $table->integer('guias');
            $table->double('persoi');
            $table->double('puntoi');
            $table->double('casili');
            $table->double('depari');
            $table->double('guiasi');
            $table->double('iva');
            $table->double('total');
            $table->double('entrega');
            $table->double('cambio');
            $table->double('cajero');
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
