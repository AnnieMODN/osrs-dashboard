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
        Schema::table('stat_snapshots', function (Blueprint $table) {
            $table->bigInteger('bounty_hunter_legacy_hunter_rank')->after('bounty_hunter_rogue_score');
            $table->bigInteger('bounty_hunter_legacy_hunter_score')->after('bounty_hunter_legacy_hunter_rank');
            $table->bigInteger('bounty_hunter_legacy_rogue_rank')->after('bounty_hunter_legacy_hunter_score');
            $table->bigInteger('bounty_hunter_legacy_rogue_score')->after('bounty_hunter_legacy_rogue_rank');
            $table->bigInteger('duke_sucellus_rank')->after('deranged_archaeologist_score');
            $table->bigInteger('duke_sucellus_score')->after('duke_sucellus_rank');
            $table->bigInteger('scurrius_rank')->after('scorpia_score');
            $table->bigInteger('scurrius_score')->after('scurrius_rank');
            $table->bigInteger('the_leviathan_rank')->after('the_corrupted_gauntlet_score');
            $table->bigInteger('the_leviathan_score')->after('the_leviathan_rank');
            $table->bigInteger('the_whisperer_rank')->after('the_leviathan_score');
            $table->bigInteger('the_whisperer_score')->after('the_whisperer_rank');
            $table->bigInteger('vardorvis_rank')->after('tztok_jad_score');
            $table->bigInteger('vardorvis_score')->after('vardorvis_rank');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('stat_snapshots', function (Blueprint $table) {
            $table->dropColumn([
                'bounty_hunter_legacy_hunter_rank',
                'bounty_hunter_legacy_hunter_score',
                'bounty_hunter_legacy_rogue_rank',
                'bounty_hunter_legacy_rogue_score',
                'duke_sucellus_rank',
                'duke_sucellus_score',
                'scurrius_rank',
                'scurrius_score',
                'the_leviathan_rank',
                'the_leviathan_score',
                'the_whisperer_rank',
                'the_whisperer_score',
                'vardorvis_rank',
                'vardorvis_score',
            ]);
        });
    }
};
