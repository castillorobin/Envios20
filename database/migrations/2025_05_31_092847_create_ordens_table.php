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
        Schema::create('ordens', function (Blueprint $table) {
            $table->id();
            $table->string('guia')->nullable();
            $table->string('comercio')->nullable();
            $table->string('destinatario')->nullable();
            $table->string('tipo')->nullable();
            $table->date('fecha_pro')->nullable();
            $table->string('ubicacion')->nullable();
            $table->string('estado')->nullable();  
            $table->string('nota')->nullable();  
            $table->string('lugar')->nullable();            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ordens');
    }
};

