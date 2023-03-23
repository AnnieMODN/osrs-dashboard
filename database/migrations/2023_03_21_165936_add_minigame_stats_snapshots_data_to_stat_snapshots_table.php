<?php

use App\Models\MinigameStatSnapshot;
use App\Models\StatSnapshot;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('stat_snapshots', function (Blueprint $table) {
            $table->after('construction_level', function (Blueprint $table) {
                $table->bigInteger('bounty_hunter_rank')->nullable();
                $table->bigInteger('bounty_hunter_score')->nullable();
                $table->bigInteger('bounty_hunter_rogue_rank')->nullable();
                $table->bigInteger('bounty_hunter_rogue_score')->nullable();
                $table->bigInteger('clue_scrolls_all_rank')->nullable();
                $table->bigInteger('clue_scrolls_all_score')->nullable();
                $table->bigInteger('clue_scrolls_beginner_rank')->nullable();
                $table->bigInteger('clue_scrolls_beginner_score')->nullable();
                $table->bigInteger('clue_scrolls_easy_rank')->nullable();
                $table->bigInteger('clue_scrolls_easy_score')->nullable();
                $table->bigInteger('clue_scrolls_medium_rank')->nullable();
                $table->bigInteger('clue_scrolls_medium_score')->nullable();
                $table->bigInteger('clue_scrolls_hard_rank')->nullable();
                $table->bigInteger('clue_scrolls_hard_score')->nullable();
                $table->bigInteger('clue_scrolls_elite_rank')->nullable();
                $table->bigInteger('clue_scrolls_elite_score')->nullable();
                $table->bigInteger('clue_scrolls_master_rank')->nullable();
                $table->bigInteger('clue_scrolls_master_score')->nullable();
                $table->bigInteger('lms_rank_rank')->nullable();
                $table->bigInteger('lms_rank_score')->nullable();
                $table->bigInteger('pvp_arena_rank')->nullable();
                $table->bigInteger('pvp_arena_score')->nullable();
                $table->bigInteger('soul_wars_zeal_rank')->nullable();
                $table->bigInteger('soul_wars_zeal_score')->nullable();
                $table->bigInteger('rifts_closed_rank')->nullable();
                $table->bigInteger('rifts_closed_score')->nullable();
                $table->bigInteger('abyssal_sire_rank')->nullable();
                $table->bigInteger('abyssal_sire_score')->nullable();
                $table->bigInteger('alchemical_hydra_rank')->nullable();
                $table->bigInteger('alchemical_hydra_score')->nullable();
                $table->bigInteger('barrows_chests_rank')->nullable();
                $table->bigInteger('barrows_chests_score')->nullable();
                $table->bigInteger('bryophyta_rank')->nullable();
                $table->bigInteger('bryophyta_score')->nullable();
                $table->bigInteger('callisto_rank')->nullable();
                $table->bigInteger('callisto_score')->nullable();
                $table->bigInteger('cerberus_rank')->nullable();
                $table->bigInteger('cerberus_score')->nullable();
                $table->bigInteger('chambers_of_xeric_rank')->nullable();
                $table->bigInteger('chambers_of_xeric_score')->nullable();
                $table->bigInteger('chambers_of_xeric_challenge_mode_rank')->nullable();
                $table->bigInteger('chambers_of_xeric_challenge_mode_score')->nullable();
                $table->bigInteger('chaos_elemental_rank')->nullable();
                $table->bigInteger('chaos_elemental_score')->nullable();
                $table->bigInteger('chaos_fanatic_rank')->nullable();
                $table->bigInteger('chaos_fanatic_score')->nullable();
                $table->bigInteger('commander_zilyana_rank')->nullable();
                $table->bigInteger('commander_zilyana_score')->nullable();
                $table->bigInteger('corporeal_beast_rank')->nullable();
                $table->bigInteger('corporeal_beast_score')->nullable();
                $table->bigInteger('crazy_archaeologist_rank')->nullable();
                $table->bigInteger('crazy_archaeologist_score')->nullable();
                $table->bigInteger('dagannoth_prime_rank')->nullable();
                $table->bigInteger('dagannoth_prime_score')->nullable();
                $table->bigInteger('dagannoth_rex_rank')->nullable();
                $table->bigInteger('dagannoth_rex_score')->nullable();
                $table->bigInteger('dagannoth_supreme_rank')->nullable();
                $table->bigInteger('dagannoth_supreme_score')->nullable();
                $table->bigInteger('deranged_archaeologist_rank')->nullable();
                $table->bigInteger('deranged_archaeologist_score')->nullable();
                $table->bigInteger('general_graador_rank')->nullable();
                $table->bigInteger('general_graador_score')->nullable();
                $table->bigInteger('giant_mole_rank')->nullable();
                $table->bigInteger('giant_mole_score')->nullable();
                $table->bigInteger('grotesque_guardians_rank')->nullable();
                $table->bigInteger('grotesque_guardians_score')->nullable();
                $table->bigInteger('hespori_rank')->nullable();
                $table->bigInteger('hespori_score')->nullable();
                $table->bigInteger('kalphite_queen_rank')->nullable();
                $table->bigInteger('kalphite_queen_score')->nullable();
                $table->bigInteger('king_black_dragon_rank')->nullable();
                $table->bigInteger('king_black_dragon_score')->nullable();
                $table->bigInteger('kraken_rank')->nullable();
                $table->bigInteger('kraken_score')->nullable();
                $table->bigInteger('kreearra_rank')->nullable();
                $table->bigInteger('kreearra_score')->nullable();
                $table->bigInteger('krill_tsutsaroth_rank')->nullable();
                $table->bigInteger('krill_tsutsaroth_score')->nullable();
                $table->bigInteger('mimic_rank')->nullable();
                $table->bigInteger('mimic_score')->nullable();
                $table->bigInteger('nex_rank')->nullable();
                $table->bigInteger('nex_score')->nullable();
                $table->bigInteger('nightmare_rank')->nullable();
                $table->bigInteger('nightmare_score')->nullable();
                $table->bigInteger('phosanis_nightmare_rank')->nullable();
                $table->bigInteger('phosanis_nightmare_score')->nullable();
                $table->bigInteger('obor_rank')->nullable();
                $table->bigInteger('obor_score')->nullable();
                $table->bigInteger('phantom_muspah_rank')->nullable();
                $table->bigInteger('phantom_muspah_score')->nullable();
                $table->bigInteger('sarachnis_rank')->nullable();
                $table->bigInteger('sarachnis_score')->nullable();
                $table->bigInteger('scorpia_rank')->nullable();
                $table->bigInteger('scorpia_score')->nullable();
                $table->bigInteger('skotizo_rank')->nullable();
                $table->bigInteger('skotizo_score')->nullable();
                $table->bigInteger('tempoross_rank')->nullable();
                $table->bigInteger('tempoross_score')->nullable();
                $table->bigInteger('the_gauntlet_rank')->nullable();
                $table->bigInteger('the_gauntlet_score')->nullable();
                $table->bigInteger('the_corrupted_gauntlet_rank')->nullable();
                $table->bigInteger('the_corrupted_gauntlet_score')->nullable();
                $table->bigInteger('theatre_of_blood_rank')->nullable();
                $table->bigInteger('theatre_of_blood_score')->nullable();
                $table->bigInteger('theatre_of_blood_hard_mode_rank')->nullable();
                $table->bigInteger('theatre_of_blood_hard_mode_score')->nullable();
                $table->bigInteger('thermonuclear_smoke_devil_rank')->nullable();
                $table->bigInteger('thermonuclear_smoke_devil_score')->nullable();
                $table->bigInteger('tombs_of_amascut_rank')->nullable();
                $table->bigInteger('tombs_of_amascut_score')->nullable();
                $table->bigInteger('tombs_of_amascut_expert_mode_rank')->nullable();
                $table->bigInteger('tombs_of_amascut_expert_mode_score')->nullable();
                $table->bigInteger('tzkal_zuk_rank')->nullable();
                $table->bigInteger('tzkal_zuk_score')->nullable();
                $table->bigInteger('tztok_jad_rank')->nullable();
                $table->bigInteger('tztok_jad_score')->nullable();
                $table->bigInteger('venenatis_rank')->nullable();
                $table->bigInteger('venenatis_score')->nullable();
                $table->bigInteger('vetion_rank')->nullable();
                $table->bigInteger('vetion_score')->nullable();
                $table->bigInteger('vorkath_rank')->nullable();
                $table->bigInteger('vorkath_score')->nullable();
                $table->bigInteger('wintertodt_rank')->nullable();
                $table->bigInteger('wintertodt_score')->nullable();
                $table->bigInteger('zolcano_rank')->nullable();
                $table->bigInteger('zolcano_score')->nullable();
                $table->bigInteger('zulrah_rank')->nullable();
                $table->bigInteger('zulrah_score')->nullable();
            });
        });

        $minigameStatSnapshots = MinigameStatSnapshot::get();

        foreach ($minigameStatSnapshots as $minigameStatSnapshot) {
            $statSnapshot = StatSnapshot::query()
                ->where('player_id', $minigameStatSnapshot->player_id)
                ->whereBetween('created_at', [$minigameStatSnapshot->created_at->subSeconds(30), $minigameStatSnapshot->created_at->addSeconds(30)])
                ->first();

            $statSnapshot->update(
                Arr::except($minigameStatSnapshot->getAttributes(), ['id', 'player_id', 'created_at', 'updated_at'])
            );
        }

        Schema::dropIfExists('minigame_stat_snapshots');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('stat_snapshots', function (Blueprint $table) {
            //
        });
    }
};
