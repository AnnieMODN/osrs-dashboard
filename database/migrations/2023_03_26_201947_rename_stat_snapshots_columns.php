<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('stat_snapshots', function (Blueprint $table) {
            $table->renameColumn('general_graador_rank', 'general_graardor_rank');
            $table->renameColumn('general_graador_score', 'general_graardor_score');
            $table->renameColumn('krill_tsutsaroth_rank', 'kril_tsutsaroth_rank');
            $table->renameColumn('krill_tsutsaroth_score', 'kril_tsutsaroth_score');
        });
    }

    /**
     * Run the migrations.
     */
    public function down()
    {
        Schema::table('stnk', function (Blueprint $table) {
            $table->renameColumn('general_graardor_rank', 'general_graador_rank');
            $table->renameColumn('general_graardor_score', 'general_graador_score');
            $table->renameColumn('kril_tsutsaroth_rank', 'krill_tsutsaroth_rank');
            $table->renameColumn('kril_tsutsaroth_score', 'krill_tsutsaroth_score');
        });
    }
};
