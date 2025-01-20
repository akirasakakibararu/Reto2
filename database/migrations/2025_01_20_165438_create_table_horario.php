<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('horarios', function (Blueprint $table) {
            $table->id('horario_id');
            $table->string('horario_dia', 9);
            $table->time('horario_hora');
            $table->string('modulo_id', 4);
            $table->timestamps();

            $table->foreign('modulo_id')->references('modulo_id')->on('modulos');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('horarios');
    }
};
