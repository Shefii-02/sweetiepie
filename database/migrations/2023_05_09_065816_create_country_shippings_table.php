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
        Schema::create('country_shippings', function (Blueprint $table) {
            $table->id();   
            $table->string('province')->nullable();
            $table->string('country')->nullable();
            $table->string('shipping_id')->nullable();
            $table->string('charge')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('country_shippings');
    }
};
