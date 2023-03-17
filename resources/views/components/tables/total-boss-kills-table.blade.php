<div class="row-span-2 h-auto w-full rounded-lg bg-white p-8 shadow-sm">
    <div class="mb-6 flex flex-col text-center text-xl font-bold">Minigame Completions / Boss Kills for
        {{ $player->username }}</div>

    {{-- @dd($latestMinigameStatSnapshots->barrows_chests_score) --}}
    <table class="w-full">
        <tr>
            <th></th>
            <th class="text-left">Minigame / Boss</th>
            <th class="text-right">Rank</th>
            <th class="text-right">Score</th>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Bounty Hunter</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->bounty_hunter_rank > 0 ? number_format($latestMinigameStatSnapshots->bounty_hunter_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->bounty_hunter_score > 0 ? number_format($latestMinigameStatSnapshots->bounty_hunter_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Bounty Hunter - Rogue</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->bounty_hunter_rogue_rank > 0 ? number_format($latestMinigameStatSnapshots->bounty_hunter_rogue_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->bounty_hunter_rogue_score > 0 ? number_format($latestMinigameStatSnapshots->bounty_hunter_rogue_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Clue Scrolls (all)</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->clue_scrolls_all_rank > 0 ? number_format($latestMinigameStatSnapshots->clue_scrolls_all_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->clue_scrolls_all_score > 0 ? number_format($latestMinigameStatSnapshots->clue_scrolls_all_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Clue Scrolls (beginner)</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->clue_scrolls_beginner_rank > 0 ? number_format($latestMinigameStatSnapshots->clue_scrolls_beginner_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->clue_scrolls_beginner_score > 0 ? number_format($latestMinigameStatSnapshots->clue_scrolls_beginner_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Clue Scrolls (easy)</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->clue_scrolls_easy_rank > 0 ? number_format($latestMinigameStatSnapshots->clue_scrolls_easy_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->clue_scrolls_easy_score > 0 ? number_format($latestMinigameStatSnapshots->clue_scrolls_easy_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Clue Scrolls (medium)</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->clue_scrolls_medium_rank > 0 ? number_format($latestMinigameStatSnapshots->clue_scrolls_medium_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->clue_scrolls_medium_score > 0 ? number_format($latestMinigameStatSnapshots->clue_scrolls_medium_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Clue Scrolls (hard)</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->clue_scrolls_hard_rank > 0 ? number_format($latestMinigameStatSnapshots->clue_scrolls_hard_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->clue_scrolls_hard_score > 0 ? number_format($latestMinigameStatSnapshots->clue_scrolls_hard_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Clue Scrolls (elite)</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->clue_scrolls_elite_rank > 0 ? number_format($latestMinigameStatSnapshots->clue_scrolls_elite_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->clue_scrolls_elite_score > 0 ? number_format($latestMinigameStatSnapshots->clue_scrolls_elite_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Clue Scrolls (master)</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->clue_scrolls_master_rank > 0 ? number_format($latestMinigameStatSnapshots->clue_scrolls_master_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->clue_scrolls_master_score > 0 ? number_format($latestMinigameStatSnapshots->clue_scrolls_master_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">LMS - Rank</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->lms_rank_rank > 0 ? number_format($latestMinigameStatSnapshots->lms_rank_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->lms_rank_score > 0 ? number_format($latestMinigameStatSnapshots->lms_rank_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">PVP Arena</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->pvp_arena_rank > 0 ? number_format($latestMinigameStatSnapshots->pvp_arena_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->pvp_arena_score > 0 ? number_format($latestMinigameStatSnapshots->pvp_arena_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Soul Wars Zeal</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->soul_wars_zeal_rank > 0 ? number_format($latestMinigameStatSnapshots->soul_wars_zeal_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->soul_wars_zeal_score > 0 ? number_format($latestMinigameStatSnapshots->soul_wars_zeal_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Rifts closed</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->rifts_closed_rank > 0 ? number_format($latestMinigameStatSnapshots->rifts_closed_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->rifts_closed_score > 0 ? number_format($latestMinigameStatSnapshots->rifts_closed_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Abyssal Sire</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->abyssal_sire_rank > 0 ? number_format($latestMinigameStatSnapshots->abyssal_sire_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->abyssal_sire_score > 0 ? number_format($latestMinigameStatSnapshots->abyssal_sire_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Alchemical Hydra</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->alchemical_hydra_rank > 0 ? number_format($latestMinigameStatSnapshots->alchemical_hydra_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->alchemical_hydra_score > 0 ? number_format($latestMinigameStatSnapshots->alchemical_hydra_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Barrows Chests</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->barrows_chests_rank > 0 ? number_format($latestMinigameStatSnapshots->barrows_chests_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->barrows_chests_score > 0 ? number_format($latestMinigameStatSnapshots->barrows_chests_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Bryophyta</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->bryophyta_rank > 0 ? number_format($latestMinigameStatSnapshots->bryophyta_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->bryophyta_score > 0 ? number_format($latestMinigameStatSnapshots->bryophyta_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Callisto</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->callisto_rank > 0 ? number_format($latestMinigameStatSnapshots->callisto_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->callisto_score > 0 ? number_format($latestMinigameStatSnapshots->callisto_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Cerberus</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->cerberus_rank > 0 ? number_format($latestMinigameStatSnapshots->cerberus_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->cerberus_score > 0 ? number_format($latestMinigameStatSnapshots->cerberus_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Chambers of Xeric</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->chambers_of_xeric_rank > 0 ? number_format($latestMinigameStatSnapshots->chambers_of_xeric_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->chambers_of_xeric_score > 0 ? number_format($latestMinigameStatSnapshots->chambers_of_xeric_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Chambers of Xeric: Challenge Mode</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->chambers_of_xeric_challenge_mode_rank > 0 ? number_format($latestMinigameStatSnapshots->chambers_of_xeric_challenge_mode_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->chambers_of_xeric_challenge_mode_score > 0 ? number_format($latestMinigameStatSnapshots->chambers_of_xeric_challenge_mode_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Chaos Elemental</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->chaos_elemental_rank > 0 ? number_format($latestMinigameStatSnapshots->chaos_elemental_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->chaos_elemental_score > 0 ? number_format($latestMinigameStatSnapshots->chaos_elemental_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Chaos Fanatic</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->chaos_fanatic_rank > 0 ? number_format($latestMinigameStatSnapshots->chaos_fanatic_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->chaos_fanatic_score > 0 ? number_format($latestMinigameStatSnapshots->chaos_fanatic_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Commander Zilyana</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->commander_zilyana_rank > 0 ? number_format($latestMinigameStatSnapshots->commander_zilyana_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->commander_zilyana_score > 0 ? number_format($latestMinigameStatSnapshots->commander_zilyana_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Corporeal Beast</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->corporeal_beast_rank > 0 ? number_format($latestMinigameStatSnapshots->corporeal_beast_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->corporeal_beast_score > 0 ? number_format($latestMinigameStatSnapshots->corporeal_beast_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Crazy Archaeologist</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->crazy_archaeologist_rank > 0 ? number_format($latestMinigameStatSnapshots->crazy_archaeologist_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->crazy_archaeologist_score > 0 ? number_format($latestMinigameStatSnapshots->crazy_archaeologist_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Dagannoth Prime</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->dagannoth_prime_rank > 0 ? number_format($latestMinigameStatSnapshots->dagannoth_prime_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->dagannoth_prime_score > 0 ? number_format($latestMinigameStatSnapshots->dagannoth_prime_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Dagannoth Rex</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->dagannoth_prime_rank > 0 ? number_format($latestMinigameStatSnapshots->dagannoth_prime_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->dagannoth_prime_score > 0 ? number_format($latestMinigameStatSnapshots->dagannoth_prime_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Dagannoth Supreme</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->dagannoth_rex_rank > 0 ? number_format($latestMinigameStatSnapshots->dagannoth_rex_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->dagannoth_rex_score > 0 ? number_format($latestMinigameStatSnapshots->dagannoth_rex_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Deranged Archaeologist</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->deranged_archaeologist_rank > 0 ? number_format($latestMinigameStatSnapshots->deranged_archaeologist_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->deranged_archaeologist_score > 0 ? number_format($latestMinigameStatSnapshots->deranged_archaeologist_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">General Graardor</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->general_graador_rank > 0 ? number_format($latestMinigameStatSnapshots->general_graador_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->general_graador_score > 0 ? number_format($latestMinigameStatSnapshots->general_graador_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Giant Mole</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->giant_mole_rank > 0 ? number_format($latestMinigameStatSnapshots->giant_mole_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->giant_mole_score > 0 ? number_format($latestMinigameStatSnapshots->giant_mole_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Grotesque Guardians</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->grotesque_guardians_rank > 0 ? number_format($latestMinigameStatSnapshots->grotesque_guardians_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->grotesque_guardians_score > 0 ? number_format($latestMinigameStatSnapshots->grotesque_guardians_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Hespori</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->hespori_rank > 0 ? number_format($latestMinigameStatSnapshots->hespori_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->hespori_score > 0 ? number_format($latestMinigameStatSnapshots->hespori_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Kalphite Queen</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->kalphite_queen_rank > 0 ? number_format($latestMinigameStatSnapshots->kalphite_queen_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->kalphite_queen_score > 0 ? number_format($latestMinigameStatSnapshots->kalphite_queen_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">King Black Dragon</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->king_black_dragon_rank > 0 ? number_format($latestMinigameStatSnapshots->king_black_dragon_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->king_black_dragon_score > 0 ? number_format($latestMinigameStatSnapshots->king_black_dragon_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Kraken</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->kraken_rank > 0 ? number_format($latestMinigameStatSnapshots->kraken_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->kraken_score > 0 ? number_format($latestMinigameStatSnapshots->kraken_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Kree'Arra</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->kreearra_rank > 0 ? number_format($latestMinigameStatSnapshots->kreearra_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->kreearra_score > 0 ? number_format($latestMinigameStatSnapshots->kreearra_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">K'ril Tsutsaroth</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->krill_tsutsaroth_rank > 0 ? number_format($latestMinigameStatSnapshots->krill_tsutsaroth_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->krill_tsutsaroth_score > 0 ? number_format($latestMinigameStatSnapshots->krill_tsutsaroth_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Mimic</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->mimic_rank > 0 ? number_format($latestMinigameStatSnapshots->mimic_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->mimic_score > 0 ? number_format($latestMinigameStatSnapshots->mimic_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Nex</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->nex_rank > 0 ? number_format($latestMinigameStatSnapshots->nex_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->nex_score > 0 ? number_format($latestMinigameStatSnapshots->nex_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Nightmare</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->nightmare_rank > 0 ? number_format($latestMinigameStatSnapshots->nightmare_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->nightmare_score > 0 ? number_format($latestMinigameStatSnapshots->nightmare_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Phosani's Nightmare</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->phosanis_nightmare_rank > 0 ? number_format($latestMinigameStatSnapshots->phosanis_nightmare_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->phosanis_nightmare_score > 0 ? number_format($latestMinigameStatSnapshots->phosanis_nightmare_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Obor</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->obor_rank > 0 ? number_format($latestMinigameStatSnapshots->obor_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->obor_score > 0 ? number_format($latestMinigameStatSnapshots->obor_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Phantom Muspah</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->phantom_muspah_rank > 0 ? number_format($latestMinigameStatSnapshots->phantom_muspah_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->phantom_muspah_score > 0 ? number_format($latestMinigameStatSnapshots->phantom_muspah_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Sarachnis</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->sarachnis_rank > 0 ? number_format($latestMinigameStatSnapshots->sarachnis_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->sarachnis_score > 0 ? number_format($latestMinigameStatSnapshots->sarachnis_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Scorpia</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->scorpia_rank > 0 ? number_format($latestMinigameStatSnapshots->scorpia_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->scorpia_score > 0 ? number_format($latestMinigameStatSnapshots->scorpia_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Skotizo</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->skotizo_rank > 0 ? number_format($latestMinigameStatSnapshots->skotizo_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->skotizo_score > 0 ? number_format($latestMinigameStatSnapshots->skotizo_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Tempoross</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->tempoross_rank > 0 ? number_format($latestMinigameStatSnapshots->tempoross_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->tempoross_score > 0 ? number_format($latestMinigameStatSnapshots->tempoross_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">The Gauntlet</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->the_gauntlet_rank > 0 ? number_format($latestMinigameStatSnapshots->the_gauntlet_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->the_gauntlet_score > 0 ? number_format($latestMinigameStatSnapshots->the_gauntlet_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">The Corrupted Gauntlet</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->the_corrupted_gauntlet_rank > 0 ? number_format($latestMinigameStatSnapshots->the_corrupted_gauntlet_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->the_corrupted_gauntlet_score > 0 ? number_format($latestMinigameStatSnapshots->the_corrupted_gauntlet_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Theatre of Blood</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->theatre_of_blood_rank > 0 ? number_format($latestMinigameStatSnapshots->theatre_of_blood_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->theatre_of_blood_score > 0 ? number_format($latestMinigameStatSnapshots->theatre_of_blood_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Theatre of Blood: Hard Mode</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->theatre_of_blood_hard_mode_rank > 0 ? number_format($latestMinigameStatSnapshots->theatre_of_blood_hard_mode_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->theatre_of_blood_hard_mode_score > 0 ? number_format($latestMinigameStatSnapshots->theatre_of_blood_hard_mode_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Thermonuclear Smoke Devil</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->thermonuclear_smoke_devil_rank > 0 ? number_format($latestMinigameStatSnapshots->thermonuclear_smoke_devil_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->thermonuclear_smoke_devil_score > 0 ? number_format($latestMinigameStatSnapshots->thermonuclear_smoke_devil_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Tombs of Amascut</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->tombs_of_amascut_rank > 0 ? number_format($latestMinigameStatSnapshots->tombs_of_amascut_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->tombs_of_amascut_score > 0 ? number_format($latestMinigameStatSnapshots->tombs_of_amascut_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Tombs of Amascut: Expert Mode</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->tombs_of_amascut_expert_mode_rank > 0 ? number_format($latestMinigameStatSnapshots->tombs_of_amascut_expert_mode_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->tombs_of_amascut_expert_mode_score > 0 ? number_format($latestMinigameStatSnapshots->tombs_of_amascut_expert_mode_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">TzKal-Zuk</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->tzkal_zuk_rank > 0 ? number_format($latestMinigameStatSnapshots->tzkal_zuk_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->tzkal_zuk_score > 0 ? number_format($latestMinigameStatSnapshots->tzkal_zuk_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">TzTok-Jad</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->tztok_jad_rank > 0 ? number_format($latestMinigameStatSnapshots->tztok_jad_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->tztok_jad_score > 0 ? number_format($latestMinigameStatSnapshots->tztok_jad_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Venenatis</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->venenatis_rank > 0 ? number_format($latestMinigameStatSnapshots->venenatis_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->venenatis_score > 0 ? number_format($latestMinigameStatSnapshots->venenatis_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Vet'ion</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->vetion_rank > 0 ? number_format($latestMinigameStatSnapshots->vetion_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->vetion_score > 0 ? number_format($latestMinigameStatSnapshots->vetion_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Vorkath</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->vorkath_rank > 0 ? number_format($latestMinigameStatSnapshots->vorkath_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->vorkath_score > 0 ? number_format($latestMinigameStatSnapshots->vorkath_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Wintertodt</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->wintertodt_rank > 0 ? number_format($latestMinigameStatSnapshots->wintertodt_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->wintertodt_score > 0 ? number_format($latestMinigameStatSnapshots->wintertodt_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Zalcano</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->zolcano_rank > 0 ? number_format($latestMinigameStatSnapshots->zolcano_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->zolcano_score > 0 ? number_format($latestMinigameStatSnapshots->zolcano_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Zulrah</td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->zulrah_rank > 0 ? number_format($latestMinigameStatSnapshots->zulrah_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->zulrah_score > 0 ? number_format($latestMinigameStatSnapshots->zulrah_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
    </table>
</div>
