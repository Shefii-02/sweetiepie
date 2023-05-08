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
        Schema::create('holidays', function (Blueprint $table) {
            $table->id();  
            $table->string('master_id')->nullable();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->date('the_date')->nullable();
            $table->string('description')->nullable();
            $table->string('block_delivery')->nullable();
            $table->string('cut_off')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('holidays');
    }
};
