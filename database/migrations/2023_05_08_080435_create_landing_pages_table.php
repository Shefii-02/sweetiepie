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
        Schema::create('landing_pages', function (Blueprint $table) {
            $table->id();
            $table->string('master_id')->nullable();
            $table->string('page_url')->nullable();
            $table->string('page_name')->nullable();
            $table->string('category_id')->nullable();
            $table->text('seo_title')->nullable();
            $table->longText('seo_description')->nullable();
            $table->string('seo_keywords')->nullable();
            $table->text('banner1_title')->nullable();
            $table->longText('banner1_description')->nullable();
            $table->string('banner1_image')->nullable();
            $table->text('section1_title')->nullable();
            $table->longText('section1_description')->nullable();
            $table->string('section1_button_text')->nullable();
            $table->string('section1_button_link')->nullable();
            $table->string('section1_image')->nullable();
            $table->text('banner2_title')->nullable();
            $table->longText('banner2_description')->nullable();
            $table->string('banner2_button_text')->nullable();
            $table->string('banner2_button_link')->nullable();
            $table->string('banner2_image')->nullable();
            $table->text('section2_title')->nullable();
            $table->longText('section2_description')->nullable();
            $table->string('section2_button_text')->nullable();
            $table->string('section2_button_link')->nullable();
            $table->string('section2_image')->nullable();
            $table->string('gallery1')->nullable();
            $table->string('gallery2')->nullable();
            $table->string('gallery3')->nullable();
            $table->tinyInteger('published')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('landing_pages');
    }
};
