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
            $table->unsignedBigInteger('user_id')->index()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('address_id')->index()->nullable();
            $table->foreign('address_id')->references('id')->on('addresses');
            $table->mediumText('address_object')->nullable();
            $table->unsignedBigInteger('payment_id')->index()->nullable();
            $table->foreign('payment_id')->references('id')->on('payments');
            $table->mediumText('payment_object')->nullable();
            $table->tinyInteger('payment_type')->default(0)->comment('0 =>online , 1=> offline');
            $table->tinyInteger('payment_status')->default(0)->comment('0 => pending , 1=> ok , 2=>failed');
            $table->unsignedBigInteger('delivery_id')->index()->nullable();
            $table->foreign('delivery_id')->references('id')->on('deliveries');
            $table->mediumText('delivery_object')->nullable();
            $table->unsignedBigInteger('delivery_amount')->default(0);
            $table->tinyInteger('delivery_status')->default(0)->comment('0 => pending, 1=> send , 2=> refund');
            $table->timestamp('delivery_date')->nullable();
            $table->unsignedBigInteger('order_final_amount');
            $table->unsignedBigInteger('order_discount_amount')->default(0);
            $table->unsignedBigInteger('discount_id')->nullable()->index();
            $table->foreign('discount_id')->references('id')->on('discounts');
            $table->mediumText('discount_object')->nullable();
            $table->unsignedBigInteger('order_total_discount')->default(0);
            $table->tinyInteger('order_status')->default(0)->comment('0 => pending, 1=> sent , 2=> in progress , 3=> refund , 4=>failed, 5=>ok');
            $table->unsignedBigInteger('cart_id')->index()->nullable();
            $table->foreign('cart_id')->references('id')->on('carts');
            $table->timestamps();
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
