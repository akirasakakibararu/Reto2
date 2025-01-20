<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('matriculas', function (Blueprint $table) {
            $table->unsignedBigInteger('usuario_id');
            $table->string('ciclo_id', 5);
            $table->date('matricula_fecha');
            $table->primary(['usuario_id', 'ciclo_id']);
            $table->timestamps();

            $table->foreign('usuario_id')->references('usuario_id')->on('usuarios');
            $table->foreign('ciclo_id')->references('ciclo_id')->on('ciclo_formativos');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('matriculas');
    }
};
