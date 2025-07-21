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
        Schema::create('detallecajas', function (Blueprint $table) {
            $table->id();
            $table->string('cajero')->nullable();
            $table->string('agencia')->nullable();
            $table->string('tipo')->nullable();
            $table->string('concepto')->nullable();
            $table->double('valor')->nullable(); 
            $table->integer('idcaja')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detallecajas');
    }
};
