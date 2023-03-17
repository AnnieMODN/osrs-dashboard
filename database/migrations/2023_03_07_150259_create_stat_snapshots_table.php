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
        Schema::create('stat_snapshots', function (Blueprint $table) {
            $table->id();
            $table->foreignId('player_id')->constrained();
            $table->bigInteger('overall_xp');
            $table->bigInteger('overall_rank');
            $table->bigInteger('overall_level');
            $table->bigInteger('attack_xp');
            $table->bigInteger('attack_rank');
            $table->bigInteger('attack_level');
            $table->bigInteger('defence_xp');
            $table->bigInteger('defence_rank');
            $table->bigInteger('defence_level');
            $table->bigInteger('strength_xp');
            $table->bigInteger('strength_rank');
            $table->bigInteger('strength_level');
            $table->bigInteger('hitpoints_xp');
            $table->bigInteger('hitpoints_rank');
            $table->bigInteger('hitpoints_level');
            $table->bigInteger('ranged_xp');
            $table->bigInteger('ranged_rank');
            $table->bigInteger('ranged_level');
            $table->bigInteger('prayer_xp');
            $table->bigInteger('prayer_rank');
            $table->bigInteger('prayer_level');
            $table->bigInteger('magic_xp');
            $table->bigInteger('magic_rank');
            $table->bigInteger('magic_level');
            $table->bigInteger('cooking_xp');
            $table->bigInteger('cooking_rank');
            $table->bigInteger('cooking_level');
            $table->bigInteger('woodcutting_xp');
            $table->bigInteger('woodcutting_rank');
            $table->bigInteger('woodcutting_level');
            $table->bigInteger('fletching_xp');
            $table->bigInteger('fletching_rank');
            $table->bigInteger('fletching_level');
            $table->bigInteger('fishing_xp');
            $table->bigInteger('fishing_rank');
            $table->bigInteger('fishing_level');
            $table->bigInteger('firemaking_xp');
            $table->bigInteger('firemaking_rank');
            $table->bigInteger('firemaking_level');
            $table->bigInteger('crafting_xp');
            $table->bigInteger('crafting_rank');
            $table->bigInteger('crafting_level');
            $table->bigInteger('smithing_xp');
            $table->bigInteger('smithing_rank');
            $table->bigInteger('smithing_level');
            $table->bigInteger('mining_xp');
            $table->bigInteger('mining_rank');
            $table->bigInteger('mining_level');
            $table->bigInteger('herblore_xp');
            $table->bigInteger('herblore_rank');
            $table->bigInteger('herblore_level');
            $table->bigInteger('agility_xp');
            $table->bigInteger('agility_rank');
            $table->bigInteger('agility_level');
            $table->bigInteger('thieving_xp');
            $table->bigInteger('thieving_rank');
            $table->bigInteger('thieving_level');
            $table->bigInteger('slayer_xp');
            $table->bigInteger('slayer_rank');
            $table->bigInteger('slayer_level');
            $table->bigInteger('farming_xp');
            $table->bigInteger('farming_rank');
            $table->bigInteger('farming_level');
            $table->bigInteger('runecraft_xp');
            $table->bigInteger('runecraft_rank');
            $table->bigInteger('runecraft_level');
            $table->bigInteger('hunter_xp');
            $table->bigInteger('hunter_rank');
            $table->bigInteger('hunter_level');
            $table->bigInteger('construction_xp');
            $table->bigInteger('construction_rank');
            $table->bigInteger('construction_level');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stats_snapshots');
    }
};
