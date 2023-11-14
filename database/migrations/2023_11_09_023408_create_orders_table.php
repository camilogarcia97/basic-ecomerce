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
            $table->string('status');
            $table->date('orderDate');
    
            // Verifica que la columna 'customer_id' exista en la tabla 'orders'
            $table->unsignedBigInteger('customer_id'); // Asumiendo que es de tipo UNSIGNED BIGINT
    
            // Asegúrate de que la tabla 'customers' esté escrita correctamente
            $table->foreign('customer_id')->references('id')->on('customers');
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
