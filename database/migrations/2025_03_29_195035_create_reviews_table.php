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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('service_id')->constrained()->cascadeOnDelete();
            $table->tinyInteger('rating')->comment('e.g., 1-5');
            $table->text('comment')->nullable();
            $table->timestamps();

            $table->unique(['user_id', 'service_id'], 'reviews_user_service_unique');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
