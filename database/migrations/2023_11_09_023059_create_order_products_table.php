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
        Schema::create('order_products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('order_id'); // Campo de tipo INT para el ID de la orden
            $table->unsignedBigInteger('product_id'); // Campo de tipo INT para el ID del producto

            // Definir la clave foránea para order_id (relacionada con la tabla de órdenes)
            $table->foreign('order_id')->constrained('orders')->onDelete('cascade');
 

            // Puedes definir una clave foránea para product_id si es necesario
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_products');
    }
};
