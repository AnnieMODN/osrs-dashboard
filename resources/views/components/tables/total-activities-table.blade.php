<div
    class="row-span-2 h-auto w-full rounded-lg bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-white sm:text-sm sm:leading-6 lg:p-8">
    <div class="flex flex-col mb-6 text-xl font-bold text-center">
        Activity Completions {{ $player->username }}
    </div>
    {{-- @dd($activitySnapshotLast7Days) --}}

    <table class="w-full">
        <tr>
            <th></th>
            <th class="text-left">Activity</th>
            <th class="text-right">Rank</th>
            <th class="text-right">Score</th>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/activities/bounty-hunter"
                    class="underline hover:underline md:no-underline">
                    Bounty Hunter
                </a>
            </td>
            <td class="text-right">
                {{ $latestActivityStatSnapshots->bounty_hunter_rank > 0 ? number_format($latestActivityStatSnapshots->bounty_hunter_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestActivityStatSnapshots->bounty_hunter_score > 0 ? number_format($latestActivityStatSnapshots->bounty_hunter_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/activities/bounty-hunter-rogue"
                    class="underline hover:underline md:no-underline">
                    Bounty Hunter - Rogue
                </a>
            </td>
            <td class="text-right">
                {{ $latestActivityStatSnapshots->bounty_hunter_rogue_rank > 0 ? number_format($latestActivityStatSnapshots->bounty_hunter_rogue_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestActivityStatSnapshots->bounty_hunter_rogue_score > 0 ? number_format($latestActivityStatSnapshots->bounty_hunter_rogue_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/activities/bounty-hunter-legacy-hunter"
                    class="underline hover:underline md:no-underline">
                    Bounty Hunter (Legacy) - Hunter
                </a>
            </td>
            <td class="text-right">
                {{ $latestActivityStatSnapshots->bounty_hunter_legacy_rouge_rank > 0 ? number_format($latestActivityStatSnapshots->bounty_hunter_legacy_rouge_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestActivityStatSnapshots->bounty_hunter_legacy_rouge_score > 0 ? number_format($latestActivityStatSnapshots->bounty_hunte_legacy_rouger_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/activities/bounty-hunter-legacy-rogue"
                    class="underline hover:underline md:no-underline">
                    Bounty Hunter - Rogue
                </a>
            </td>
            <td class="text-right">
                {{ $latestActivityStatSnapshots->bounty_hunter_legacy_rogue_rank > 0 ? number_format($latestActivityStatSnapshots->bounty_hunter_legacy_rogue_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestActivityStatSnapshots->bounty_hunter_legacy_rogue_score > 0 ? number_format($latestActivityStatSnapshots->bounty_hunter_legacy_rogue_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/activities/clue-scrolls-all"
                    class="underline hover:underline md:no-underline">
                    Clue Scrolls (all)
                </a>
            </td>
            <td class="text-right">
                {{ $latestActivityStatSnapshots->clue_scrolls_all_rank > 0 ? number_format($latestActivityStatSnapshots->clue_scrolls_all_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestActivityStatSnapshots->clue_scrolls_all_score > 0 ? number_format($latestActivityStatSnapshots->clue_scrolls_all_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/activities/clue-scrolls-beginner"
                    class="underline hover:underline md:no-underline">
                    Clue Scrolls (beginner)
                </a>
            </td>
            <td class="text-right">
                {{ $latestActivityStatSnapshots->clue_scrolls_beginner_rank > 0 ? number_format($latestActivityStatSnapshots->clue_scrolls_beginner_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestActivityStatSnapshots->clue_scrolls_beginner_score > 0 ? number_format($latestActivityStatSnapshots->clue_scrolls_beginner_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/activities/clue-scrolls-easy"
                    class="underline hover:underline md:no-underline">
                    Clue Scrolls (easy)
                </a>
            </td>
            <td class="text-right">
                {{ $latestActivityStatSnapshots->clue_scrolls_easy_rank > 0 ? number_format($latestActivityStatSnapshots->clue_scrolls_easy_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestActivityStatSnapshots->clue_scrolls_easy_score > 0 ? number_format($latestActivityStatSnapshots->clue_scrolls_easy_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/activities/clue-scrolls-medium"
                    class="underline hover:underline md:no-underline">
                    Clue Scrolls (medium)
                </a>
            </td>
            <td class="text-right">
                {{ $latestActivityStatSnapshots->clue_scrolls_medium_rank > 0 ? number_format($latestActivityStatSnapshots->clue_scrolls_medium_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestActivityStatSnapshots->clue_scrolls_medium_score > 0 ? number_format($latestActivityStatSnapshots->clue_scrolls_medium_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/activities/clue-scrolls-hard"
                    class="underline hover:underline md:no-underline">
                    Clue Scrolls (hard)
                </a>
            </td>
            <td class="text-right">
                {{ $latestActivityStatSnapshots->clue_scrolls_hard_rank > 0 ? number_format($latestActivityStatSnapshots->clue_scrolls_hard_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestActivityStatSnapshots->clue_scrolls_hard_score > 0 ? number_format($latestActivityStatSnapshots->clue_scrolls_hard_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/activities/clue-scrolls-elite"
                    class="underline hover:underline md:no-underline">
                    Clue Scrolls (elite)
                </a>
            </td>
            <td class="text-right">
                {{ $latestActivityStatSnapshots->clue_scrolls_elite_rank > 0 ? number_format($latestActivityStatSnapshots->clue_scrolls_elite_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestActivityStatSnapshots->clue_scrolls_elite_score > 0 ? number_format($latestActivityStatSnapshots->clue_scrolls_elite_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/activities/clue-scrolls-master"
                    class="underline hover:underline md:no-underline">
                    Clue Scrolls (master)
                </a>
            </td>
            <td class="text-right">
                {{ $latestActivityStatSnapshots->clue_scrolls_master_rank > 0 ? number_format($latestActivityStatSnapshots->clue_scrolls_master_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestActivityStatSnapshots->clue_scrolls_master_score > 0 ? number_format($latestActivityStatSnapshots->clue_scrolls_master_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/activities/lms-rank"
                    class="underline hover:underline md:no-underline">
                    LMS - Rank
                </a>
            </td>
            <td class="text-right">
                {{ $latestActivityStatSnapshots->lms_rank_rank > 0 ? number_format($latestActivityStatSnapshots->lms_rank_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestActivityStatSnapshots->lms_rank_score > 0 ? number_format($latestActivityStatSnapshots->lms_rank_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/activities/pvp-arena"
                    class="underline hover:underline md:no-underline">
                    PVP Arena
                </a>
            </td>
            <td class="text-right">
                {{ $latestActivityStatSnapshots->pvp_arena_rank > 0 ? number_format($latestActivityStatSnapshots->pvp_arena_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestActivityStatSnapshots->pvp_arena_score > 0 ? number_format($latestActivityStatSnapshots->pvp_arena_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/activities/soul-wars-zeal"
                    class="underline hover:underline md:no-underline">
                    Soul Wars Zeal
                </a>
            </td>
            <td class="text-right">
                {{ $latestActivityStatSnapshots->soul_wars_zeal_rank > 0 ? number_format($latestActivityStatSnapshots->soul_wars_zeal_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestActivityStatSnapshots->soul_wars_zeal_score > 0 ? number_format($latestActivityStatSnapshots->soul_wars_zeal_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/activities/rifts-closed"
                    class="underline hover:underline md:no-underline">
                    Guardians of the Rift: Rifts closed</a>
            </td>
            <td class="text-right">
                {{ $latestActivityStatSnapshots->rifts_closed_rank > 0 ? number_format($latestActivityStatSnapshots->rifts_closed_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $latestActivityStatSnapshots->rifts_closed_score > 0 ? number_format($latestActivityStatSnapshots->rifts_closed_score, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
    </table>
</div>
