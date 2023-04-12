<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('stat_snapshots', function (Blueprint $table) {
            $table->bigInteger('artio_rank')->after('alchemical_hydra_score');
            $table->bigInteger('artio_score')->after('artio_rank');
            $table->bigInteger('calvarion_rank')->after('callisto_score');
            $table->bigInteger('calvarion_score')->after('calvarion_rank');
            $table->bigInteger('spindel_rank')->after('skotizo_score');
            $table->bigInteger('spindel_score')->after('spindel_rank');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('stat_snapshots', function (Blueprint $table) {
            $table->dropColumn([
                'artio_rank',
                'artio_score',
                'calvarion_rank',
                'calvarion_score',
                'spindel_rank',
                'spindel_score'
            ]);
        });
    }
};
