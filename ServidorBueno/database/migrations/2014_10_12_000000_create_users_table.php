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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
           
            $table->string('nombre_user')-> unique();
            $table->string('dni')->unique();
            $table->string('nombre')->nullable();
            $table->string('apellidos')->nullable();
            $table->string('telefono');
            $table -> string('direccion');
            $table->string('contraseña');
            $table->string('puesto');
            $table->date('incorporacion');
            $table->string('estado')->nullable();
            $table->rememberToken();
            $table->timestamps();

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
