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
            $table->string('name')->unique();
            $table->string('category')->nullable();
            $table->text('description')->nullable();
            $table->string('url')->nullable();
            $table->string('youtube')->nullable();
            $table->text('embed')->nullable();
            $table->integer('width')->nullable();
            $table->integer('height')->nullable();
            $table->string('thumb1')->nullable();
            $table->string('thumb2')->nullable();
            $table->string('thumb3')->nullable();
            $table->string('thumb4')->nullable();
            $table->string('thumb5')->nullable();
            $table->string('thumb6')->nullable();
            $table->string('thumb7')->nullable();
            $table->string('thumb8')->nullable();
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
