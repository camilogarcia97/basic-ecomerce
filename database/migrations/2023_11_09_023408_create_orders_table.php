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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('status'); // Campo de tipo STRING para el estado
            $table->unsignedBigInteger('customer_id'); // Campo de tipo INT para el ID del cliente
            $table->date('orderDate'); // Campo de tipo FECHA para la fecha de la orden

            // Definir la clave foránea  para customer_id (relacionada con la tabla de clientes)
            $table->foreign('customer_id')->constrained('customers'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
