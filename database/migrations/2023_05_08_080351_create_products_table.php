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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('master_id')->nullable();
            $table->text('name')->nullable();
            $table->text('slug')->nullable();
            $table->string('availability')->nullable();
            $table->longText('description')->nullable();
            $table->longText('contents')->nullable();
            $table->string('picture')->nullable();
            $table->string('picture_small')->nullable();
            $table->string('nutrition_picture')->nullable();
            $table->string('ingredients_picture')->nullable();
            $table->string('tax_id')->nullable();
            $table->longText('seo_title')->nullable();
            $table->longText('seo_description')->nullable();
            $table->longText('seo_keyword')->nullable();
            $table->longText('seo_alt')->nullable();
            $table->string('type')->nullable();
            $table->integer('display_order')->default(1);
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
