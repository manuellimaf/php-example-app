<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {

        Schema::create('asset', function (Blueprint $table) {
            $table->string('ticker')->primary();
            $table->string('description');
            $table->enum('asset_type', ['Bond', 'ON', 'Stock']);
            $table->timestamps();
        });

        Schema::create('asset_current_price', function (Blueprint $table) {
            $table->id();
            $table->string('ticker');
            $table->float('price');
            $table->timestamp('price_date');
            $table->timestamps();

            $table->foreign('ticker')->references('ticker')->on('asset');
        });

        Schema::create('operation', function (Blueprint $table) {
            $table->id();
            $table->string('ticker');
            $table->enum('operation_type', ['buy', 'sell']);
            $table->float('buy_price');
            $table->timestamp('buy_date');
            $table->float('sell_price')->nullable();
            $table->timestamp('sell_date')->nullable();
            $table->integer('quantity');
            $table->float('tax');
            $table->timestamps();

            $table->foreign('ticker')->references('ticker')->on('asset');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asset');
        Schema::dropIfExists('asset_current_price');
        Schema::dropIfExists('operation');
    }
};