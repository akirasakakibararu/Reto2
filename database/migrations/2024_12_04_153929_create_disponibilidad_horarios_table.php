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
        Schema::create('disponibilidad_horarios', function (Blueprint $table) {
            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('horario_id');

            $table->primary(['usuario_id', 'horario_id']);

            $table->foreign('usuario_id')->references('usuario_id')->on('usuarios');
            $table->foreign('horario_id')->references('horario_id')->on('horarios');    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disponibilidad_horarios');
    }
};
