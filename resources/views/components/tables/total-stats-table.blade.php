<div class="row-span-2 h-auto w-full rounded-lg bg-white p-4 shadow-sm lg:p-8">
    <div class="mb-6 flex flex-col text-center text-xl font-bold">Personal stats for {{ $player->username }}</div>
    <table class="w-full overflow-x-auto">
        <tr>
            <th></th>
            <th class="text-left">Skill</th>
            <th class="text-right">Rank</th>
            <th class="text-right">Level</th>
            <th class="text-right">XP</th>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Overall</td>
            <td class="text-right">
                {{ $groupedStats->overall_rank > 0 ? number_format($groupedStats->overall_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $groupedStats->overall_level > 0 ? number_format($groupedStats->overall_level, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $groupedStats->overall_xp > 0 ? number_format($groupedStats->overall_xp, 0, '.', ',') : 'N/A' }}</td>

        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/skills/attack"
                    class="underline hover:underline md:no-underline">
                    Attack
                </a>
            </td>
            <td class="text-right">
                {{ $groupedStats->attack_rank > 0 ? number_format($groupedStats->attack_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $groupedStats->attack_level > 0 ? number_format($groupedStats->attack_level, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $groupedStats->attack_xp > 0 ? number_format($groupedStats->attack_xp, 0, '.', ',') : 'N/A' }}</td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/skills/defence"
                    class="underline hover:underline md:no-underline">
                    Defence
                </a>
            </td>
            <td class="text-right">
                {{ $groupedStats->defence_rank > 0 ? number_format($groupedStats->defence_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $groupedStats->defence_level > 0 ? number_format($groupedStats->defence_level, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $groupedStats->defence_xp > 0 ? number_format($groupedStats->defence_xp, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/skills/strength"
                    class="underline hover:underline md:no-underline">
                    Strength
                </a>
            </td>
            <td class="text-right">
                {{ $groupedStats->strength_rank > 0 ? number_format($groupedStats->strength_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $groupedStats->strength_level > 0 ? number_format($groupedStats->strength_level, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $groupedStats->strength_xp > 0 ? number_format($groupedStats->strength_xp, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/skills/hitpoints"
                    class="underline hover:underline md:no-underline">
                    Hitpoints
                </a>
            </td>
            <td class="text-right">
                {{ $groupedStats->hitpoints_rank > 0 ? number_format($groupedStats->hitpoints_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $groupedStats->hitpoints_level > 0 ? number_format($groupedStats->hitpoints_level, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $groupedStats->hitpoints_xp > 0 ? number_format($groupedStats->hitpoints_xp, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/skills/ranged"
                    class="underline hover:underline md:no-underline">
                    Ranged
                </a>
            </td>
            <td class="text-right">
                {{ $groupedStats->ranged_rank > 0 ? number_format($groupedStats->ranged_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $groupedStats->ranged_level > 0 ? number_format($groupedStats->ranged_level, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $groupedStats->ranged_xp > 0 ? number_format($groupedStats->ranged_xp, 0, '.', ',') : 'N/A' }}</td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/skills/prayer"
                    class="underline hover:underline md:no-underline">
                    Prayer
                </a>
            </td>
            <td class="text-right">
                {{ $groupedStats->prayer_rank > 0 ? number_format($groupedStats->prayer_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $groupedStats->prayer_level > 0 ? number_format($groupedStats->prayer_level, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $groupedStats->prayer_xp > 0 ? number_format($groupedStats->prayer_xp, 0, '.', ',') : 'N/A' }}</td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/skills/magic"
                    class="underline hover:underline md:no-underline">
                    Magic
                </a>
            </td>
            <td class="text-right">
                {{ $groupedStats->magic_rank > 0 ? number_format($groupedStats->magic_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $groupedStats->magic_level > 0 ? number_format($groupedStats->magic_level, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $groupedStats->magic_xp > 0 ? number_format($groupedStats->magic_xp, 0, '.', ',') : 'N/A' }}</td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/skills/cooking"
                    class="underline hover:underline md:no-underline">
                    Cooking
                </a>
            </td>
            <td class="text-right">
                {{ $groupedStats->overall_rank > 0 ? number_format($groupedStats->cooking_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $groupedStats->overall_rank > 0 ? number_format($groupedStats->cooking_level, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $groupedStats->overall_rank > 0 ? number_format($groupedStats->cooking_xp, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/skills/woodcutting"
                    class="underline hover:underline md:no-underline">
                    Woodcutting
                </a>
            </td>
            <td class="text-right">
                {{ $groupedStats->woodcutting_rank > 0 ? number_format($groupedStats->woodcutting_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $groupedStats->woodcutting_level > 0 ? number_format($groupedStats->woodcutting_level, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $groupedStats->woodcutting_xp > 0 ? number_format($groupedStats->woodcutting_xp, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/skills/fletching"
                    class="underline hover:underline md:no-underline">
                    Fletching
                </a>
            </td>
            <td class="text-right">
                {{ $groupedStats->fletching_rank > 0 ? number_format($groupedStats->fletching_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $groupedStats->fletching_level > 0 ? number_format($groupedStats->fletching_level, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $groupedStats->fletching_xp > 0 ? number_format($groupedStats->fletching_xp, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/skills/fishing"
                    class="underline hover:underline md:no-underline">
                    Fishing
                </a>
            </td>
            <td class="text-right">
                {{ $groupedStats->fishing_rank > 0 ? number_format($groupedStats->fishing_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $groupedStats->fishing_level > 0 ? number_format($groupedStats->fishing_level, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $groupedStats->fishing_xp > 0 ? number_format($groupedStats->fishing_xp, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/skills/firemaking"
                    class="underline hover:underline md:no-underline">
                    Firemaking
                </a>
            </td>
            <td class="text-right">
                {{ $groupedStats->firemaking_rank > 0 ? number_format($groupedStats->firemaking_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $groupedStats->firemaking_level > 0 ? number_format($groupedStats->firemaking_level, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $groupedStats->firemaking_xp > 0 ? number_format($groupedStats->firemaking_xp, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/skills/crafting"
                    class="underline hover:underline md:no-underline">
                    Crafting
                </a>
            </td>
            <td class="text-right">
                {{ $groupedStats->crafting_rank > 0 ? number_format($groupedStats->crafting_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $groupedStats->crafting_level > 0 ? number_format($groupedStats->crafting_level, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $groupedStats->crafting_xp > 0 ? number_format($groupedStats->crafting_xp, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/skills/smithing"
                    class="underline hover:underline md:no-underline">
                    Smithing
                </a>
            </td>
            <td class="text-right">
                {{ $groupedStats->smithing_rank > 0 ? number_format($groupedStats->smithing_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $groupedStats->smithing_level > 0 ? number_format($groupedStats->smithing_level, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $groupedStats->smithing_xp > 0 ? number_format($groupedStats->smithing_xp, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/skills/mining"
                    class="underline hover:underline md:no-underline">
                    Mining
                </a>
            </td>
            <td class="text-right">
                {{ $groupedStats->mining_rank > 0 ? number_format($groupedStats->mining_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $groupedStats->mining_level > 0 ? number_format($groupedStats->mining_level, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $groupedStats->mining_xp > 0 ? number_format($groupedStats->mining_xp, 0, '.', ',') : 'N/A' }}</td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/skills/herblore"
                    class="underline hover:underline md:no-underline">
                    Herblore
                </a>
            </td>
            <td class="text-right">
                {{ $groupedStats->herblore_rank > 0 ? number_format($groupedStats->herblore_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $groupedStats->herblore_level > 0 ? number_format($groupedStats->herblore_level, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $groupedStats->herblore_xp > 0 ? number_format($groupedStats->herblore_xp, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/skills/agility"
                    class="underline hover:underline md:no-underline">
                    Agility
                </a>
            </td>
            <td class="text-right">
                {{ $groupedStats->agility_rank > 0 ? number_format($groupedStats->agility_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $groupedStats->agility_level > 0 ? number_format($groupedStats->agility_level, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $groupedStats->agility_xp > 0 ? number_format($groupedStats->agility_xp, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/skills/thieving"
                    class="underline hover:underline md:no-underline">
                    Thieving
                </a>
            </td>
            <td class="text-right">
                {{ $groupedStats->thieving_rank > 0 ? number_format($groupedStats->thieving_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $groupedStats->thieving_level > 0 ? number_format($groupedStats->thieving_level, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $groupedStats->thieving_xp > 0 ? number_format($groupedStats->thieving_xp, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/skills/slayer"
                    class="underline hover:underline md:no-underline">
                    Slayer
                </a>
            </td>
            <td class="text-right">
                {{ $groupedStats->slayer_rank > 0 ? number_format($groupedStats->slayer_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $groupedStats->slayer_level > 0 ? number_format($groupedStats->slayer_level, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $groupedStats->slayer_xp > 0 ? number_format($groupedStats->slayer_xp, 0, '.', ',') : 'N/A' }}</td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/skills/farming"
                    class="underline hover:underline md:no-underline">
                    Farming
                </a>
            </td>
            <td class="text-right">
                {{ $groupedStats->farming_rank > 0 ? number_format($groupedStats->farming_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $groupedStats->farming_level > 0 ? number_format($groupedStats->farming_level, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $groupedStats->farming_xp > 0 ? number_format($groupedStats->farming_xp, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/skills/runecraft"
                    class="underline hover:underline md:no-underline">
                    Runecraft
                </a>
            </td>
            <td class="text-right">
                {{ $groupedStats->runecraft_rank > 0 ? number_format($groupedStats->runecraft_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $groupedStats->runecraft_level > 0 ? number_format($groupedStats->runecraft_level, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $groupedStats->runecraft_xp > 0 ? number_format($groupedStats->runecraft_xp, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/skills/hunter"
                    class="underline hover:underline md:no-underline">
                    Hunter
                </a>
            </td>
            <td class="text-right">
                {{ $groupedStats->hunter_rank > 0 ? number_format($groupedStats->hunter_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $groupedStats->hunter_level > 0 ? number_format($groupedStats->hunter_level, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $groupedStats->hunter_xp > 0 ? number_format($groupedStats->hunter_xp, 0, '.', ',') : 'N/A' }}</td>

        </tr>
        <tr>
            <td></td>
            <td class="text-left">
                <a href="/players/{{ $player->username }}/skills/construction"
                    class="underline hover:underline md:no-underline">
                    Construction
                </a>
            </td>
            <td class="text-right">
                {{ $groupedStats->construction_rank > 0 ? number_format($groupedStats->construction_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $groupedStats->construction_level > 0 ? number_format($groupedStats->construction_level, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $groupedStats->construction_xp > 0 ? number_format($groupedStats->construction_xp, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
    </table>
</div>
