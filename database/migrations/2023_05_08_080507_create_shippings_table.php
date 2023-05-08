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
        Schema::create('shippings', function (Blueprint $table) {
            $table->id(); 
            $table->string('master_id')->nullable();
            $table->text('name')->nullable();
            $table->text('slug')->nullable();
            $table->longText('description')->nullable();
            $table->string('charge')->nullable();
            $table->string('days')->nullable();
            $table->string('max_days')->nullable();
            $table->string('cut_off')->nullable();
            $table->string('info_line')->nullable();
            $table->string('policy_id')->nullable();
            $table->tinyInteger('sunday')->default(1);
            $table->tinyInteger('monday')->default(1);
            $table->tinyInteger('tuesday')->default(1);
            $table->tinyInteger('wednesday')->default(1);
            $table->tinyInteger('thursday')->default(1);
            $table->tinyInteger('friday')->default(1);
            $table->tinyInteger('saturday')->default(1);
            $table->string('require_date')->nullable();
            $table->string('priority')->nullable();
            $table->string('picture')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shippings');
    }
};
