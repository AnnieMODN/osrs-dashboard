<div class="row-span-2 h-auto w-full rounded-lg bg-white p-4 shadow-sm lg:p-8">
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
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/bounty-hunter"
                    class="underline hover:underline md:no-underline">
                    Bounty Hunter
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->bounty_hunter_rank > 0 ? number_format($latestMinigameStatSnapshots->bounty_hunter_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->bounty_hunter_score > 0 ? number_format($latestMinigameStatSnapshots->bounty_hunter_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/bounty-hunter-rogue"
                    class="underline hover:underline md:no-underline">
                    Bounty Hunter - Rogue
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->bounty_hunter_rogue_rank > 0 ? number_format($latestMinigameStatSnapshots->bounty_hunter_rogue_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->bounty_hunter_rogue_score > 0 ? number_format($latestMinigameStatSnapshots->bounty_hunter_rogue_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/clue-scrolls-all"
                    class="underline hover:underline md:no-underline">
                    Clue Scrolls (all)
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->clue_scrolls_all_rank > 0 ? number_format($latestMinigameStatSnapshots->clue_scrolls_all_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->clue_scrolls_all_score > 0 ? number_format($latestMinigameStatSnapshots->clue_scrolls_all_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/clue-scrolls-beginner"
                    class="underline hover:underline md:no-underline">
                    Clue Scrolls (beginner)
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->clue_scrolls_beginner_rank > 0 ? number_format($latestMinigameStatSnapshots->clue_scrolls_beginner_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->clue_scrolls_beginner_score > 0 ? number_format($latestMinigameStatSnapshots->clue_scrolls_beginner_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/clue-scrolls-easy"
                    class="underline hover:underline md:no-underline">
                    Clue Scrolls (easy)
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->clue_scrolls_easy_rank > 0 ? number_format($latestMinigameStatSnapshots->clue_scrolls_easy_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->clue_scrolls_easy_score > 0 ? number_format($latestMinigameStatSnapshots->clue_scrolls_easy_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/clue-scrolls-medium"
                    class="underline hover:underline md:no-underline">
                    Clue Scrolls (medium)
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->clue_scrolls_medium_rank > 0 ? number_format($latestMinigameStatSnapshots->clue_scrolls_medium_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->clue_scrolls_medium_score > 0 ? number_format($latestMinigameStatSnapshots->clue_scrolls_medium_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/clue-scrolls-hard"
                    class="underline hover:underline md:no-underline">
                    Clue Scrolls (hard)
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->clue_scrolls_hard_rank > 0 ? number_format($latestMinigameStatSnapshots->clue_scrolls_hard_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->clue_scrolls_hard_score > 0 ? number_format($latestMinigameStatSnapshots->clue_scrolls_hard_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/clue-scrolls-elite"
                    class="underline hover:underline md:no-underline">
                    Clue Scrolls (elite)
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->clue_scrolls_elite_rank > 0 ? number_format($latestMinigameStatSnapshots->clue_scrolls_elite_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->clue_scrolls_elite_score > 0 ? number_format($latestMinigameStatSnapshots->clue_scrolls_elite_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/clue-scrolls-master"
                    class="underline hover:underline md:no-underline">
                    Clue Scrolls (master)
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->clue_scrolls_master_rank > 0 ? number_format($latestMinigameStatSnapshots->clue_scrolls_master_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->clue_scrolls_master_score > 0 ? number_format($latestMinigameStatSnapshots->clue_scrolls_master_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/lms-rank"
                    class="underline hover:underline md:no-underline">
                    LMS - Rank
                </a>
            </td>
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
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/pvp-arena"
                    class="underline hover:underline md:no-underline">
                    PVP Arena
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->pvp_arena_rank > 0 ? number_format($latestMinigameStatSnapshots->pvp_arena_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->pvp_arena_score > 0 ? number_format($latestMinigameStatSnapshots->pvp_arena_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/soul-wars-zeal"
                    class="underline hover:underline md:no-underline">
                    Soul Wars Zeal
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->soul_wars_zeal_rank > 0 ? number_format($latestMinigameStatSnapshots->soul_wars_zeal_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->soul_wars_zeal_score > 0 ? number_format($latestMinigameStatSnapshots->soul_wars_zeal_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/rifts-closed"
                    class="underline hover:underline md:no-underline">
                    Guardians of the Rifts: Rifts closed</a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->rifts_closed_rank > 0 ? number_format($latestMinigameStatSnapshots->rifts_closed_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->rifts_closed_score > 0 ? number_format($latestMinigameStatSnapshots->rifts_closed_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/abyssal-sire"
                    class="underline hover:underline md:no-underline">
                    Abyssal Sire
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->abyssal_sire_rank > 0 ? number_format($latestMinigameStatSnapshots->abyssal_sire_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->abyssal_sire_score > 0 ? number_format($latestMinigameStatSnapshots->abyssal_sire_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/alchemical-hydra"
                    class="underline hover:underline md:no-underline">
                    Alchemical Hydra
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->alchemical_hydra_rank > 0 ? number_format($latestMinigameStatSnapshots->alchemical_hydra_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->alchemical_hydra_score > 0 ? number_format($latestMinigameStatSnapshots->alchemical_hydra_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/barrows"
                    class="underline hover:underline md:no-underline">
                    Barrows Chests
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->barrows_chests_rank > 0 ? number_format($latestMinigameStatSnapshots->barrows_chests_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->barrows_chests_score > 0 ? number_format($latestMinigameStatSnapshots->barrows_chests_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/bryophyta"
                    class="underline hover:underline md:no-underline">
                    Bryophyta
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->bryophyta_rank > 0 ? number_format($latestMinigameStatSnapshots->bryophyta_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->bryophyta_score > 0 ? number_format($latestMinigameStatSnapshots->bryophyta_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/callisto"
                    class="underline hover:underline md:no-underline">
                    Callisto
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->callisto_rank > 0 ? number_format($latestMinigameStatSnapshots->callisto_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->callisto_score > 0 ? number_format($latestMinigameStatSnapshots->callisto_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/cerberus"
                    class="underline hover:underline md:no-underline">
                    Cerberus
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->cerberus_rank > 0 ? number_format($latestMinigameStatSnapshots->cerberus_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->cerberus_score > 0 ? number_format($latestMinigameStatSnapshots->cerberus_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/chambers-of-xeric"
                    class="underline hover:underline md:no-underline">
                    Chambers of Xeric
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->chambers_of_xeric_rank > 0 ? number_format($latestMinigameStatSnapshots->chambers_of_xeric_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->chambers_of_xeric_score > 0 ? number_format($latestMinigameStatSnapshots->chambers_of_xeric_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/chambers-of-xeric-challenge-mode"
                    class="underline hover:underline md:no-underline">
                    Chambers of Xeric: Challenge Mode
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->chambers_of_xeric_challenge_mode_rank > 0 ? number_format($latestMinigameStatSnapshots->chambers_of_xeric_challenge_mode_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->chambers_of_xeric_challenge_mode_score > 0 ? number_format($latestMinigameStatSnapshots->chambers_of_xeric_challenge_mode_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/chaos-elemental"
                    class="underline hover:underline md:no-underline">
                    Chaos Elemental
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->chaos_elemental_rank > 0 ? number_format($latestMinigameStatSnapshots->chaos_elemental_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->chaos_elemental_score > 0 ? number_format($latestMinigameStatSnapshots->chaos_elemental_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/chaos-fanatic"
                    class="underline hover:underline md:no-underline">
                    Chaos Fanatic
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->chaos_fanatic_rank > 0 ? number_format($latestMinigameStatSnapshots->chaos_fanatic_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->chaos_fanatic_score > 0 ? number_format($latestMinigameStatSnapshots->chaos_fanatic_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/commander-zilyana"
                    class="underline hover:underline md:no-underline">
                    Commander Zilyana
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->commander_zilyana_rank > 0 ? number_format($latestMinigameStatSnapshots->commander_zilyana_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->commander_zilyana_score > 0 ? number_format($latestMinigameStatSnapshots->commander_zilyana_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/corporeal-beast"
                    class="underline hover:underline md:no-underline">
                    Corporeal Beast
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->corporeal_beast_rank > 0 ? number_format($latestMinigameStatSnapshots->corporeal_beast_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->corporeal_beast_score > 0 ? number_format($latestMinigameStatSnapshots->corporeal_beast_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/crazy-archaeologist"
                    class="underline hover:underline md:no-underline">
                    Crazy Archaeologist
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->crazy_archaeologist_rank > 0 ? number_format($latestMinigameStatSnapshots->crazy_archaeologist_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->crazy_archaeologist_score > 0 ? number_format($latestMinigameStatSnapshots->crazy_archaeologist_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/dagannoth-prime"
                    class="underline hover:underline md:no-underline">
                    Dagannoth Prime
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->dagannoth_prime_rank > 0 ? number_format($latestMinigameStatSnapshots->dagannoth_prime_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->dagannoth_prime_score > 0 ? number_format($latestMinigameStatSnapshots->dagannoth_prime_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/dagannoth-rex"
                    class="underline hover:underline md:no-underline">
                    Dagannoth Rex
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->dagannoth_prime_rank > 0 ? number_format($latestMinigameStatSnapshots->dagannoth_prime_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->dagannoth_prime_score > 0 ? number_format($latestMinigameStatSnapshots->dagannoth_prime_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/dagannoth-supreme"
                    class="underline hover:underline md:no-underline">
                    Dagannoth Supreme
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->dagannoth_rex_rank > 0 ? number_format($latestMinigameStatSnapshots->dagannoth_rex_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->dagannoth_rex_score > 0 ? number_format($latestMinigameStatSnapshots->dagannoth_rex_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/deranged-archaeologist"
                    class="underline hover:underline md:no-underline">
                    Deranged Archaeologist
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->deranged_archaeologist_rank > 0 ? number_format($latestMinigameStatSnapshots->deranged_archaeologist_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->deranged_archaeologist_score > 0 ? number_format($latestMinigameStatSnapshots->deranged_archaeologist_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/general-graardor"
                    class="underline hover:underline md:no-underline">
                    General Graardor
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->general_graador_rank > 0 ? number_format($latestMinigameStatSnapshots->general_graador_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->general_graador_score > 0 ? number_format($latestMinigameStatSnapshots->general_graador_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/giant-mole"
                    class="underline hover:underline md:no-underline">
                    Giant Mole
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->giant_mole_rank > 0 ? number_format($latestMinigameStatSnapshots->giant_mole_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->giant_mole_score > 0 ? number_format($latestMinigameStatSnapshots->giant_mole_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/grotesque-guardians"
                    class="underline hover:underline md:no-underline">
                    Grotesque Guardians
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->grotesque_guardians_rank > 0 ? number_format($latestMinigameStatSnapshots->grotesque_guardians_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->grotesque_guardians_score > 0 ? number_format($latestMinigameStatSnapshots->grotesque_guardians_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/hespori"
                    class="underline hover:underline md:no-underline">
                    Hespori
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->hespori_rank > 0 ? number_format($latestMinigameStatSnapshots->hespori_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->hespori_score > 0 ? number_format($latestMinigameStatSnapshots->hespori_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/kalphite-queen"
                    class="underline hover:underline md:no-underline">
                    Kalphite Queen
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->kalphite_queen_rank > 0 ? number_format($latestMinigameStatSnapshots->kalphite_queen_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->kalphite_queen_score > 0 ? number_format($latestMinigameStatSnapshots->kalphite_queen_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/king-black-dragon"
                    class="underline hover:underline md:no-underline">
                    King Black Dragon
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->king_black_dragon_rank > 0 ? number_format($latestMinigameStatSnapshots->king_black_dragon_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->king_black_dragon_score > 0 ? number_format($latestMinigameStatSnapshots->king_black_dragon_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/kraken"
                    class="underline hover:underline md:no-underline">
                    Kraken
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->kraken_rank > 0 ? number_format($latestMinigameStatSnapshots->kraken_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->kraken_score > 0 ? number_format($latestMinigameStatSnapshots->kraken_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/kreearra"
                    class="underline hover:underline md:no-underline">
                    Kree'Arra
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->kreearra_rank > 0 ? number_format($latestMinigameStatSnapshots->kreearra_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->kreearra_score > 0 ? number_format($latestMinigameStatSnapshots->kreearra_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/kril-tsutsaroth"
                    class="underline hover:underline md:no-underline">
                    K'ril Tsutsaroth
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->krill_tsutsaroth_rank > 0 ? number_format($latestMinigameStatSnapshots->krill_tsutsaroth_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->krill_tsutsaroth_score > 0 ? number_format($latestMinigameStatSnapshots->krill_tsutsaroth_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/mimic"
                    class="underline hover:underline md:no-underline">
                    Mimic
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->mimic_rank > 0 ? number_format($latestMinigameStatSnapshots->mimic_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->mimic_score > 0 ? number_format($latestMinigameStatSnapshots->mimic_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/attack"
                    class="underline hover:underline md:no-underline">
                    Nex
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->nex_rank > 0 ? number_format($latestMinigameStatSnapshots->nex_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->nex_score > 0 ? number_format($latestMinigameStatSnapshots->nex_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/nightmare"
                    class="underline hover:underline md:no-underline">
                    Nightmare
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->nightmare_rank > 0 ? number_format($latestMinigameStatSnapshots->nightmare_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->nightmare_score > 0 ? number_format($latestMinigameStatSnapshots->nightmare_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/phosanis-nightmare"
                    class="underline hover:underline md:no-underline">
                    Phosani's Nightmare
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->phosanis_nightmare_rank > 0 ? number_format($latestMinigameStatSnapshots->phosanis_nightmare_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->phosanis_nightmare_score > 0 ? number_format($latestMinigameStatSnapshots->phosanis_nightmare_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/obor"
                    class="underline hover:underline md:no-underline">
                    Obor
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->obor_rank > 0 ? number_format($latestMinigameStatSnapshots->obor_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->obor_score > 0 ? number_format($latestMinigameStatSnapshots->obor_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/phantom-muspah"
                    class="underline hover:underline md:no-underline">
                    Phantom Muspah
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->phantom_muspah_rank > 0 ? number_format($latestMinigameStatSnapshots->phantom_muspah_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->phantom_muspah_score > 0 ? number_format($latestMinigameStatSnapshots->phantom_muspah_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/sarachnis"
                    class="underline hover:underline md:no-underline">
                    Sarachnis
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->sarachnis_rank > 0 ? number_format($latestMinigameStatSnapshots->sarachnis_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->sarachnis_score > 0 ? number_format($latestMinigameStatSnapshots->sarachnis_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/scorpia"
                    class="underline hover:underline md:no-underline">
                    Scorpia
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->scorpia_rank > 0 ? number_format($latestMinigameStatSnapshots->scorpia_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->scorpia_score > 0 ? number_format($latestMinigameStatSnapshots->scorpia_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/skotizo"
                    class="underline hover:underline md:no-underline">
                    Skotizo
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->skotizo_rank > 0 ? number_format($latestMinigameStatSnapshots->skotizo_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->skotizo_score > 0 ? number_format($latestMinigameStatSnapshots->skotizo_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/tempoross"
                    class="underline hover:underline md:no-underline">
                    Tempoross
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->tempoross_rank > 0 ? number_format($latestMinigameStatSnapshots->tempoross_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->tempoross_score > 0 ? number_format($latestMinigameStatSnapshots->tempoross_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/gauntlet"
                    class="underline hover:underline md:no-underline">
                    The Gauntlet
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->the_gauntlet_rank > 0 ? number_format($latestMinigameStatSnapshots->the_gauntlet_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->the_gauntlet_score > 0 ? number_format($latestMinigameStatSnapshots->the_gauntlet_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/corrupted-gauntlet"
                    class="underline hover:underline md:no-underline">
                    The Corrupted Gauntlet
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->the_corrupted_gauntlet_rank > 0 ? number_format($latestMinigameStatSnapshots->the_corrupted_gauntlet_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->the_corrupted_gauntlet_score > 0 ? number_format($latestMinigameStatSnapshots->the_corrupted_gauntlet_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/theatre-of-blood"
                    class="underline hover:underline md:no-underline">
                    Theatre of Blood
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->theatre_of_blood_rank > 0 ? number_format($latestMinigameStatSnapshots->theatre_of_blood_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->theatre_of_blood_score > 0 ? number_format($latestMinigameStatSnapshots->theatre_of_blood_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/theatre-of-blood-hard-mode"
                    class="underline hover:underline md:no-underline">
                    Theatre of Blood: Hard Mode
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->theatre_of_blood_hard_mode_rank > 0 ? number_format($latestMinigameStatSnapshots->theatre_of_blood_hard_mode_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->theatre_of_blood_hard_mode_score > 0 ? number_format($latestMinigameStatSnapshots->theatre_of_blood_hard_mode_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/thermonuclear-smoke-devil"
                    class="underline hover:underline md:no-underline">
                    Thermonuclear Smoke Devil
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->thermonuclear_smoke_devil_rank > 0 ? number_format($latestMinigameStatSnapshots->thermonuclear_smoke_devil_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->thermonuclear_smoke_devil_score > 0 ? number_format($latestMinigameStatSnapshots->thermonuclear_smoke_devil_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/tombs-of-amascut"
                    class="underline hover:underline md:no-underline">
                    Tombs of Amascut
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->tombs_of_amascut_rank > 0 ? number_format($latestMinigameStatSnapshots->tombs_of_amascut_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->tombs_of_amascut_score > 0 ? number_format($latestMinigameStatSnapshots->tombs_of_amascut_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/tombs-of-amascut-expert"
                    class="underline hover:underline md:no-underline">
                    Tombs of Amascut: Expert Mode
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->tombs_of_amascut_expert_mode_rank > 0 ? number_format($latestMinigameStatSnapshots->tombs_of_amascut_expert_mode_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->tombs_of_amascut_expert_mode_score > 0 ? number_format($latestMinigameStatSnapshots->tombs_of_amascut_expert_mode_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/tztok-zuk"
                    class="underline hover:underline md:no-underline">
                    TzKal-Zuk
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->tzkal_zuk_rank > 0 ? number_format($latestMinigameStatSnapshots->tzkal_zuk_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->tzkal_zuk_score > 0 ? number_format($latestMinigameStatSnapshots->tzkal_zuk_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/tztok-jad"
                    class="underline hover:underline md:no-underline">
                    TzTok-Jad
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->tztok_jad_rank > 0 ? number_format($latestMinigameStatSnapshots->tztok_jad_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->tztok_jad_score > 0 ? number_format($latestMinigameStatSnapshots->tztok_jad_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/venenatis"
                    class="underline hover:underline md:no-underline">
                    Venenatis
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->venenatis_rank > 0 ? number_format($latestMinigameStatSnapshots->venenatis_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->venenatis_score > 0 ? number_format($latestMinigameStatSnapshots->venenatis_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/vetion"
                    class="underline hover:underline md:no-underline">
                    Vet'ion
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->vetion_rank > 0 ? number_format($latestMinigameStatSnapshots->vetion_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->vetion_score > 0 ? number_format($latestMinigameStatSnapshots->vetion_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/vorkath"
                    class="underline hover:underline md:no-underline">
                    Vorkath
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->vorkath_rank > 0 ? number_format($latestMinigameStatSnapshots->vorkath_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->vorkath_score > 0 ? number_format($latestMinigameStatSnapshots->vorkath_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/wintertodt"
                    class="underline hover:underline md:no-underline">
                    Wintertodt
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->wintertodt_rank > 0 ? number_format($latestMinigameStatSnapshots->wintertodt_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->wintertodt_score > 0 ? number_format($latestMinigameStatSnapshots->wintertodt_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/zalcano"
                    class="underline hover:underline md:no-underline">
                    Zalcano
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->zolcano_rank > 0 ? number_format($latestMinigameStatSnapshots->zolcano_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->zolcano_score > 0 ? number_format($latestMinigameStatSnapshots->zolcano_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/minigames/zulrah"
                    class="underline hover:underline md:no-underline">
                    Zulrah
                </a>
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->zulrah_rank > 0 ? number_format($latestMinigameStatSnapshots->zulrah_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestMinigameStatSnapshots->zulrah_score > 0 ? number_format($latestMinigameStatSnapshots->zulrah_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
    </table>
</div>
