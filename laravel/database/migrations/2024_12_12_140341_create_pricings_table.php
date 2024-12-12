<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pricings', function (Blueprint $table) {
            $table->id();
            $table->string('duration'); // monthly, quarterly, annual
            $table->integer('game_quantity');
            $table->decimal('price', 8, 2);
            $table->timestamps();
        });
        DB::table('pricings')->insert([
            ['duration' => 'monthly', 'game_quantity' => 1, 'price' => 10.00],
            ['duration' => 'monthly', 'game_quantity' => 2, 'price' => 18.00],
            ['duration' => 'monthly', 'game_quantity' => 3, 'price' => 25.00],
            ['duration' => 'monthly', 'game_quantity' => 4, 'price' => 35.00],
            ['duration' => 'quarterly', 'game_quantity' => 1, 'price' => 25.00],
            ['duration' => 'quarterly', 'game_quantity' => 2, 'price' => 48.00],
            ['duration' => 'quarterly', 'game_quantity' => 3, 'price' => 60.00],
            ['duration' => 'quarterly', 'game_quantity' => 4, 'price' => 75.00],
            ['duration' => 'annual', 'game_quantity' => 1, 'price' => 100.00],
            ['duration' => 'annual', 'game_quantity' => 2, 'price' => 195.00],
            ['duration' => 'annual', 'game_quantity' => 3, 'price' => 275.00],
            ['duration' => 'annual', 'game_quantity' => 4, 'price' => 395.00],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pricings');
    }
};
