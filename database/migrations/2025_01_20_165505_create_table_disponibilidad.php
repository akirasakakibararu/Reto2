<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('disponibilidades', function (Blueprint $table) {
            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('horario_id');
            $table->primary(['usuario_id', 'horario_id']);
            $table->timestamps();

            $table->foreign('usuario_id')->references('usuario_id')->on('usuarios');
            $table->foreign('horario_id')->references('horario_id')->on('horarios');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('disponibilidades');
    }
};
