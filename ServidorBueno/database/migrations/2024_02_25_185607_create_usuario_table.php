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
            $table->id();
            $table->string('nombre_user')-> unique();
            $table->string('dni')->unique();
            $table->string('nombre')->nullable();
            $table->string('apellidos')->nullable();
            $table->string('telefono');
            $table -> string('direccion');
            $table->string('contraseña');
            $table->string('puesto');
            $table->date('incorporacion');
            //con foreign consigo hacer las relaciones entre la tabla usuarios con la tabla eventos y departamentos
            $table->unsignedBigInteger('id_departamento')->nullable();
            $table->foreign('id_departamento')->references('id')->on('departamento')->onDelete('cascade');
            $table->unsignedBigInteger('id_evento')->nullable();
            $table->foreign('id_evento')->references('id')->on('evento')->onDelete('cascade');
            $table->string('estado')->nullable();
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario');
    }
};

