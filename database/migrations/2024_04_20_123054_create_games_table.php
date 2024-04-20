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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('game_number')->unique();
            $table->json('position')->nullable(false);
            $table->foreignId('first_blood')->constrained('users')->onDelete('cascade')->nullable(false);
            $table->foreignId('commander_kill')->constrained('users')->onDelete('cascade');
            $table->foreignId('multi_kill')->constrained('users')->onDelete('cascade');
            $table->foreignId('rescue')->constrained('users')->onDelete('cascade');
            $table->foreignId('aesthetics')->constrained('users')->onDelete('cascade');
            $table->foreignId('best_play')->constrained('users')->onDelete('cascade');
            $table->text('comments')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
