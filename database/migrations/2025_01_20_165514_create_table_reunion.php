<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('reuniones', function (Blueprint $table) {
            $table->id('reunion_id');
            $table->string('reunion_dia', 9);
            $table->time('reunion_hora');
            $table->unsignedBigInteger('usuario_id');
            $table->timestamps();

            $table->foreign('usuario_id')->references('usuario_id')->on('usuarios');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reuniones');
    }
};
