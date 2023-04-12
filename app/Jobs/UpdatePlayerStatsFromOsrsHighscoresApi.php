<?php

namespace App\Jobs;

use App\Models\Player;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class UpdatePlayerStatsFromOsrsHighscoresApi implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $player;

    /**
     * Create a new job instance.
     */
    public function __construct(string $player = 'LunaarSky')
    {
        $this->player = strtolower(urldecode($player));
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $response = Http::get("https://secure.runescape.com/m=hiscore_oldschool/index_lite.ws?player=" . urlencode($this->player));

        // dd($response->body());

        if ($response->failed()) {
            throw new \Exception("Error Processing Request", 1);
        }

        $data = Str::of($response->body())
            ->replace("\n", ",")
            ->explode(',')
            ->map(function ($value) {
                return (int) $value;
            })
            ->toArray();

        // Get player name, check if its in the players table, if not add to players table. Add player id to stats snapshot
        $player = Player::firstOrCreate(['username' => $this->player]);

        // dd($data, count($data));

        if (count($data) != 208 + 1) {
            throw new \Exception("Error Processing Request", 1);
        }

        $player->statSnapshots()->create([
            'overall_rank' => $data[0],
            'overall_level' => $data[1],
            'overall_xp' => $data[2],
            'attack_rank' => $data[3],
            'attack_level' => $data[4],
            'attack_xp' => $data[5],
            'defence_rank' => $data[6],
            'defence_level' => $data[7],
            'defence_xp' => $data[8],
            'strength_rank' => $data[9],
            'strength_level' => $data[10],
            'strength_xp' => $data[11],
            'hitpoints_rank' => $data[12],
            'hitpoints_level' => $data[13],
            'hitpoints_xp' => $data[14],
            'ranged_rank' => $data[15],
            'ranged_level' => $data[16],
            'ranged_xp' => $data[17],
            'prayer_rank' => $data[18],
            'prayer_level' => $data[19],
            'prayer_xp' => $data[20],
            'magic_rank' => $data[21],
            'magic_level' => $data[22],
            'magic_xp' => $data[23],
            'cooking_rank' => $data[24],
            'cooking_level' => $data[25],
            'cooking_xp' => $data[26],
            'woodcutting_rank' => $data[27],
            'woodcutting_level' => $data[28],
            'woodcutting_xp' => $data[29],
            'fletching_rank' => $data[30],
            'fletching_level' => $data[31],
            'fletching_xp' => $data[32],
            'fishing_rank' => $data[33],
            'fishing_level' => $data[34],
            'fishing_xp' => $data[35],
            'firemaking_rank' => $data[36],
            'firemaking_level' => $data[37],
            'firemaking_xp' => $data[38],
            'crafting_rank' => $data[39],
            'crafting_level' => $data[40],
            'crafting_xp' => $data[41],
            'smithing_rank' => $data[42],
            'smithing_level' => $data[43],
            'smithing_xp' => $data[44],
            'mining_rank' => $data[45],
            'mining_level' => $data[46],
            'mining_xp' => $data[47],
            'herblore_rank' => $data[48],
            'herblore_level' => $data[49],
            'herblore_xp' => $data[50],
            'agility_rank' => $data[51],
            'agility_level' => $data[52],
            'agility_xp' => $data[53],
            'thieving_rank' => $data[54],
            'thieving_level' => $data[55],
            'thieving_xp' => $data[56],
            'slayer_rank' => $data[57],
            'slayer_level' => $data[58],
            'slayer_xp' => $data[59],
            'farming_rank' => $data[60],
            'farming_level' => $data[61],
            'farming_xp' => $data[62],
            'runecraft_rank' => $data[63],
            'runecraft_level' => $data[64],
            'runecraft_xp' => $data[65],
            'hunter_rank' => $data[66],
            'hunter_level' => $data[67],
            'hunter_xp' => $data[68],
            'construction_rank' => $data[69],
            'construction_level' => $data[70],
            'construction_xp' => $data[71],
            'bounty_hunter_rank' => $data[74],
            'bounty_hunter_score' => $data[75],
            'bounty_hunter_rogue_rank' => $data[76],
            'bounty_hunter_rogue_score' => $data[77],
            'clue_scrolls_all_rank' => $data[78],
            'clue_scrolls_all_score' => $data[79],
            'clue_scrolls_beginner_rank' => $data[80],
            'clue_scrolls_beginner_score' => $data[81],
            'clue_scrolls_easy_rank' => $data[82],
            'clue_scrolls_easy_score' => $data[83],
            'clue_scrolls_medium_rank' => $data[84],
            'clue_scrolls_medium_score' => $data[85],
            'clue_scrolls_hard_rank' => $data[86],
            'clue_scrolls_hard_score' => $data[87],
            'clue_scrolls_elite_rank' => $data[88],
            'clue_scrolls_elite_score' => $data[89],
            'clue_scrolls_master_rank' => $data[90],
            'clue_scrolls_master_score' => $data[91],
            'lms_rank_rank' => $data[92],
            'lms_rank_score' => $data[93],
            'pvp_arena_rank' => $data[94],
            'pvp_arena_score' => $data[95],
            'soul_wars_zeal_rank' => $data[96],
            'soul_wars_zeal_score' => $data[97],
            'rifts_closed_rank' => $data[98],
            'rifts_closed_score' => $data[99],
            'abyssal_sire_rank' => $data[100],
            'abyssal_sire_score' => $data[101],
            'alchemical_hydra_rank' => $data[102],
            'alchemical_hydra_score' => $data[103],
            'artio_rank' => $data[104],
            'artio_score' => $data[105],
            'barrows_chests_rank' => $data[106],
            'barrows_chests_score' => $data[107],
            'bryophyta_rank' => $data[108],
            'bryophyta_score' => $data[109],
            'callisto_rank' => $data[110],
            'callisto_score' => $data[111],
            'calvarion_rank' => $data[112],
            'calvarion_score' => $data[113],
            'cerberus_rank' => $data[114],
            'cerberus_score' => $data[115],
            'chambers_of_xeric_rank' => $data[116],
            'chambers_of_xeric_score' => $data[117],
            'chambers_of_xeric_challenge_mode_rank' => $data[118],
            'chambers_of_xeric_challenge_mode_score' => $data[119],
            'chaos_elemental_rank' => $data[120],
            'chaos_elemental_score' => $data[121],
            'chaos_fanatic_rank' => $data[122],
            'chaos_fanatic_score' => $data[123],
            'commander_zilyana_rank' => $data[124],
            'commander_zilyana_score' => $data[125],
            'corporeal_beast_rank' => $data[126],
            'corporeal_beast_score' => $data[127],
            'crazy_archaeologist_rank' => $data[128],
            'crazy_archaeologist_score' => $data[129],
            'dagannoth_prime_rank' => $data[130],
            'dagannoth_prime_score' => $data[131],
            'dagannoth_rex_rank' => $data[132],
            'dagannoth_rex_score' => $data[133],
            'dagannoth_supreme_rank' => $data[134],
            'dagannoth_supreme_score' => $data[135],
            'deranged_archaeologist_rank' => $data[136],
            'deranged_archaeologist_score' => $data[137],
            'general_graardor_rank' => $data[138],
            'general_graardor_score' => $data[139],
            'giant_mole_rank' => $data[140],
            'giant_mole_score' => $data[141],
            'grotesque_guardians_rank' => $data[142],
            'grotesque_guardians_score' => $data[143],
            'hespori_rank' => $data[144],
            'hespori_score' => $data[145],
            'kalphite_queen_rank' => $data[146],
            'kalphite_queen_score' => $data[147],
            'king_black_dragon_rank' => $data[148],
            'king_black_dragon_score' => $data[149],
            'kraken_rank' => $data[150],
            'kraken_score' => $data[151],
            'kreearra_rank' => $data[152],
            'kreearra_score' => $data[153],
            'kril_tsutsaroth_rank' => $data[154],
            'kril_tsutsaroth_score' => $data[155],
            'mimic_rank' => $data[156],
            'mimic_score' => $data[157],
            'nex_rank' => $data[158],
            'nex_score' => $data[159],
            'nightmare_rank' => $data[160],
            'nightmare_score' => $data[161],
            'phosanis_nightmare_rank' => $data[162],
            'phosanis_nightmare_score' => $data[163],
            'obor_rank' => $data[164],
            'obor_score' => $data[165],
            'phantom_muspah_rank' => $data[166],
            'phantom_muspah_score' => $data[167],
            'sarachnis_rank' => $data[168],
            'sarachnis_score' => $data[169],
            'scorpia_rank' => $data[170],
            'scorpia_score' => $data[171],
            'skotizo_rank' => $data[172],
            'skotizo_score' => $data[173],
            'spindel_rank' => $data[174],
            'spindel_score' => $data[175],
            'tempoross_rank' => $data[176],
            'tempoross_score' => $data[177],
            'the_gauntlet_rank' => $data[178],
            'the_gauntlet_score' => $data[179],
            'the_corrupted_gauntlet_rank' => $data[180],
            'the_corrupted_gauntlet_score' => $data[181],
            'theatre_of_blood_rank' => $data[182],
            'theatre_of_blood_score' => $data[183],
            'theatre_of_blood_hard_mode_rank' => $data[184],
            'theatre_of_blood_hard_mode_score' => $data[185],
            'thermonuclear_smoke_devil_rank' => $data[186],
            'thermonuclear_smoke_devil_score' => $data[187],
            'tombs_of_amascut_rank' => $data[188],
            'tombs_of_amascut_score' => $data[189],
            'tombs_of_amascut_expert_mode_rank' => $data[190],
            'tombs_of_amascut_expert_mode_score' => $data[191],
            'tzkal_zuk_rank' => $data[192],
            'tzkal_zuk_score' => $data[193],
            'tztok_jad_rank' => $data[194],
            'tztok_jad_score' => $data[195],
            'venenatis_rank' => $data[196],
            'venenatis_score' => $data[197],
            'vetion_rank' => $data[198],
            'vetion_score' => $data[199],
            'vorkath_rank' => $data[200],
            'vorkath_score' => $data[201],
            'wintertodt_rank' => $data[202],
            'wintertodt_score' => $data[203],
            'zolcano_rank' => $data[204],
            'zolcano_score' => $data[205],
            'zulrah_rank' => $data[206],
            'zulrah_score' => $data[207]
        ]);
    }
}
