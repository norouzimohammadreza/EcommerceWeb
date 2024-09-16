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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('tracking_code',191)->unique();
            $table->unsignedBigInteger('amount');
            $table->unsignedBigInteger('user_id')->nullable()->index();
            $table->string('gateway',191)->nullable();
            $table->text('message')->nullable();
            $table->text('driver')->nullable();
            $table->text('uuid')->nullable();
            $table->text('transaction_id')->nullable();
            $table->text('reference_id')->nullable();
            $table->tinyInteger('status')->default(0)->comment('0 => init , 1 => pair , 2 => failed');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
