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
        Schema::create('empleado_envio', function (Blueprint $table) {
    $table->id();
    $table->foreignId('empleado_id')->constrained('empleados')->cascadeOnDelete();
    $table->foreignId('envio_id')->constrained('envios')->cascadeOnDelete();
    $table->timestamps();

    $table->unique(['empleado_id', 'envio_id']);
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleado_envio');
    }
};
