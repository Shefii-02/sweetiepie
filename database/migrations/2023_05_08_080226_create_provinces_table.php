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
        Schema::create('provinces', function (Blueprint $table) {
            $table->id();
            $table->string('master_id')->nullable();
            $table->string('name')->nullable();
            $table->string('code')->nullable();
            $table->string('country')->nullable();
            $table->string('base')->nullable()->default(0);
            $table->tinyInteger('status')->default(1);
            $table->string('page_id')->nullable();
            $table->string('price')->nullable();
            $table->string('all_products')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('provinces');
    }
};
