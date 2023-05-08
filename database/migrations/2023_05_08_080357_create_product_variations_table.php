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
        Schema::create('product_variations', function (Blueprint $table) {
            $table->id();
            $table->string('product_id')->nullable();
            $table->text('sku')->nullable();
            $table->text('variation_name')->nullable();
            $table->string('weight')->nullable();
            $table->string('in_stock')->nullable();
            $table->integer('stock_status')->default(1);
            $table->string('price')->nullable();
            $table->string('serving')->nullable();
            $table->string('cook_time')->nullable();
            $table->string('energy')->nullable();
            $table->string('vegan')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_variations');
    }
};
