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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('name'); // Campo de tipo STRING para el nombre
            $table->string('last_names'); // Campo de tipo STRING para los apellidos
            $table->string('age'); // Campo de tipo INT para la edad
            $table->unsignedBigInteger('identification_number'); // Campo de tipo STRING para el número de identificación
            $table->string('email'); // Campo de tipo STRING para el correo electrónico
            $table->string('phone_number'); // Campo de tipo STRING para el número de teléfono
            $table->string('address'); // Campo de tipo STRING para la dirección
            $table->string('state'); // Campo de tipo STRING para el estado
            $table->string('city'); // Campo de tipo STRING para la ciudad
            $table->string('postal_code'); // Campo de tipo STRING para el código postal
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
