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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->index()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('discount_id')->index()->nullable();
            $table->foreign('discount_id')->references('id')->on('discounts');
            $table->tinyInteger('status')->default(1)->comment('0 => close, 1 => open');
            $table->timestamp('expired_at')->nullable();
            $table->unsignedBigInteger('total_price');
            $table->unsignedBigInteger('total_off_price')->nullable();
            $table->tinyInteger('discount_status')->default(0)->comment('0 => unused, 1 => used');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
