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
        Schema::create('customer_order_products', function (Blueprint $table) {
            $table->id();
            $table->foreign('ecommerce_product_id')
            ->references('ecommerce_product_id')
            ->on('product_photos')
            ->onDelete('cascade');
            $table->string('name', 32);
            $table->string('description');
            $table->integer('price');
            $table->string('size', 16);
            $table->string('uniform_number')->nullable();
            $table->string('uniform_name')->nullable();
            $table->integer('quantity');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_order_products');
    }
};
