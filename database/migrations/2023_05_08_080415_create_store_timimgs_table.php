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
        Schema::create('store_timimgs', function (Blueprint $table) {
            $table->id();
            $table->string('day')->nullable();
            $table->string('store_id')->nullable();
            $table->string('open')->nullable();
            $table->string('close')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('store_timimgs');
    }
};
