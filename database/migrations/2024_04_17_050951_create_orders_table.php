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
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('address_id')->nullable(); // Dirección de envío
            $table->unsignedBigInteger('billing_address_id')->nullable(); // Dirección de facturación
            $table->unsignedBigInteger('transaction_id')->nullable(); // Transacción asociada
            $table->unsignedBigInteger('status_id')->nullable(); // Estado del pedido
            $table->timestamps();

            // Definición de claves foráneas
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->deferrable();
            $table->foreign('address_id')->references('id')->on('addresses')->onDelete('set null')->deferrable();
            $table->foreign('billing_address_id')->references('id')->on('addresses')->onDelete('set null')->deferrable();
            $table->foreign('transaction_id')->references('id')->on('transactions')->onDelete('set null')->deferrable();
            $table->foreign('status_id')->references('id')->on('order_statuses')->onDelete('set null')->deferrable();
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
