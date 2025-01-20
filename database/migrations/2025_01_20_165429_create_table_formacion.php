<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('formaciones', function (Blueprint $table) {
            $table->string('ciclo_id', 5);
            $table->string('modulo_id', 4);
            $table->integer('curso_id');
            $table->primary(['ciclo_id', 'modulo_id']);
            $table->timestamps();

            $table->foreign('ciclo_id')->references('ciclo_id')->on('ciclo_formativos');
            $table->foreign('modulo_id')->references('modulo_id')->on('modulos');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('formaciones');
    }
};
