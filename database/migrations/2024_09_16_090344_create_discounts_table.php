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
        Schema::create('discounts', function (Blueprint $table) {
            $table->id();
            $table->string('code',191);
            $table->unsignedBigInteger('amount');
            $table->tinyInteger('amount_type')->default(0)->comment('0 => percentage, 1 => value');
            $table->unsignedBigInteger('discount_celling')->comment('max discount');
            $table->tinyInteger('type')->default(0)->comment('0 => public, 1 => private');
            $table->tinyInteger('status')->default(0);
            $table->unsignedBigInteger('user_id')->nullable()->index();
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamp('start_date');
            $table->timestamp('end_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discounts');
    }
};
