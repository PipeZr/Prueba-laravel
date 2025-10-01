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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // nombre del empleado
            $table->string('email')->unique(); // email único
            $table->string('phone')->nullable(); // teléfono opcional
            $table->string('address')->nullable(); // dirección opcional
            $table->string('position'); // cargo
            $table->decimal('salary', 10, 2); // salario con decimales
            $table->json('skills')->nullable(); // habilidades en JSON
            $table->timestamps(); // created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
