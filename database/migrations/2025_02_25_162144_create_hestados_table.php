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
        Schema::create('hestados', function (Blueprint $table) {
            $table->id();
            $table->integer('idenvio')->nullable();
            $table->string('estado')->nullable();
            $table->string('nota')->nullable();
            $table->string('motivofallo')->nullable();
            $table->string('notafallo')->nullable();
            $table->date('freprogra')->nullable();
            $table->string('usuario')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hestados');
    }
};
