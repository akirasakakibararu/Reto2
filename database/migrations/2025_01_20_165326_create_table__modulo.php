<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('modulos', function (Blueprint $table) {
            $table->string('modulo_id', 4)->primary();
            $table->string('modulo_nombre', 100);
            $table->integer('modulo_horasTotales');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('modulos');
    }
};
