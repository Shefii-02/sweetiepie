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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('master_id')->nullable();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('parent_id')->nullable();
            $table->string('level')->nullable();
            $table->string('link')->nullable();
            $table->string('weight')->nullable();
            $table->string('landing_page')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
