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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();  
            $table->string('master_id')->nullable();
            $table->text('name')->nullable();
            $table->text('slug')->nullable();
            $table->longText('description')->nullable();
            $table->string('picture')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->date('published_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
