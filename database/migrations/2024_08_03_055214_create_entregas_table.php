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
        Schema::create('entregas', function (Blueprint $table) {
            $table->id();
            $table->string('cajero')->nullable();
            $table->string('metodo')->nullable();
            $table->double('desceunto')->nullable();
            $table->string('nota')->nullable();
            $table->double('subtotal')->nullable();
            $table->double('total')->nullable();
            $table->double('entrega')->nullable();
            $table->double('cambio')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entregas');
    }
};
