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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id('usuario_id');
            $table->string('usuario_contrasenna')->unique();
            $table->string('usuario_dni', 9)->unique();
            $table->string('usuario_nombre', 30);
            $table->string('usuario_apellidos', 30);
            $table->string('usuario_direccion', 40)->nullable();
            $table->string('usuario_telefono1', 9);
            $table->string('usuario_telefono2', 9)->nullable();
            $table->binary('usuario_foto')->nullable();
            $table->unsignedBigInteger('rol_id');

            $table->foreign('rol_id')->references('rol_id')->on('roles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
