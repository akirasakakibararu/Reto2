<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('ciclo_formativos', function (Blueprint $table) {
            $table->string('ciclo_id', 5)->primary();
            $table->string('ciclo_nombre', 50);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ciclo_formativos');
    }
};
