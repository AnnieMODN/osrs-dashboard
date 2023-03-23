<div
    class="row-span-2 h-auto w-full rounded-lg bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-white sm:text-sm sm:leading-6 lg:p-8">
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
                {{ $statSnapshot->overall_rank > 0 ? number_format($statSnapshot->overall_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $statSnapshot->overall_level > 0 ? number_format($statSnapshot->overall_level, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $statSnapshot->overall_xp > 0 ? number_format($statSnapshot->overall_xp, 0, '.', ',') : 'N/A' }}</td>

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
                {{ $statSnapshot->attack_rank > 0 ? number_format($statSnapshot->attack_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $statSnapshot->attack_level > 0 ? number_format($statSnapshot->attack_level, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $statSnapshot->attack_xp > 0 ? number_format($statSnapshot->attack_xp, 0, '.', ',') : 'N/A' }}</td>
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
                {{ $statSnapshot->defence_rank > 0 ? number_format($statSnapshot->defence_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $statSnapshot->defence_level > 0 ? number_format($statSnapshot->defence_level, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $statSnapshot->defence_xp > 0 ? number_format($statSnapshot->defence_xp, 0, '.', ',') : 'N/A' }}
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
                {{ $statSnapshot->strength_rank > 0 ? number_format($statSnapshot->strength_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $statSnapshot->strength_level > 0 ? number_format($statSnapshot->strength_level, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $statSnapshot->strength_xp > 0 ? number_format($statSnapshot->strength_xp, 0, '.', ',') : 'N/A' }}
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
                {{ $statSnapshot->hitpoints_rank > 0 ? number_format($statSnapshot->hitpoints_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $statSnapshot->hitpoints_level > 0 ? number_format($statSnapshot->hitpoints_level, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $statSnapshot->hitpoints_xp > 0 ? number_format($statSnapshot->hitpoints_xp, 0, '.', ',') : 'N/A' }}
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
                {{ $statSnapshot->ranged_rank > 0 ? number_format($statSnapshot->ranged_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $statSnapshot->ranged_level > 0 ? number_format($statSnapshot->ranged_level, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $statSnapshot->ranged_xp > 0 ? number_format($statSnapshot->ranged_xp, 0, '.', ',') : 'N/A' }}</td>
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
                {{ $statSnapshot->prayer_rank > 0 ? number_format($statSnapshot->prayer_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $statSnapshot->prayer_level > 0 ? number_format($statSnapshot->prayer_level, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $statSnapshot->prayer_xp > 0 ? number_format($statSnapshot->prayer_xp, 0, '.', ',') : 'N/A' }}</td>
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
                {{ $statSnapshot->magic_rank > 0 ? number_format($statSnapshot->magic_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $statSnapshot->magic_level > 0 ? number_format($statSnapshot->magic_level, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $statSnapshot->magic_xp > 0 ? number_format($statSnapshot->magic_xp, 0, '.', ',') : 'N/A' }}</td>
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
                {{ $statSnapshot->overall_rank > 0 ? number_format($statSnapshot->cooking_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $statSnapshot->overall_rank > 0 ? number_format($statSnapshot->cooking_level, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $statSnapshot->overall_rank > 0 ? number_format($statSnapshot->cooking_xp, 0, '.', ',') : 'N/A' }}
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
                {{ $statSnapshot->woodcutting_rank > 0 ? number_format($statSnapshot->woodcutting_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $statSnapshot->woodcutting_level > 0 ? number_format($statSnapshot->woodcutting_level, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $statSnapshot->woodcutting_xp > 0 ? number_format($statSnapshot->woodcutting_xp, 0, '.', ',') : 'N/A' }}
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
                {{ $statSnapshot->fletching_rank > 0 ? number_format($statSnapshot->fletching_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $statSnapshot->fletching_level > 0 ? number_format($statSnapshot->fletching_level, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $statSnapshot->fletching_xp > 0 ? number_format($statSnapshot->fletching_xp, 0, '.', ',') : 'N/A' }}
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
                {{ $statSnapshot->fishing_rank > 0 ? number_format($statSnapshot->fishing_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $statSnapshot->fishing_level > 0 ? number_format($statSnapshot->fishing_level, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $statSnapshot->fishing_xp > 0 ? number_format($statSnapshot->fishing_xp, 0, '.', ',') : 'N/A' }}
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
                {{ $statSnapshot->firemaking_rank > 0 ? number_format($statSnapshot->firemaking_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $statSnapshot->firemaking_level > 0 ? number_format($statSnapshot->firemaking_level, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $statSnapshot->firemaking_xp > 0 ? number_format($statSnapshot->firemaking_xp, 0, '.', ',') : 'N/A' }}
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
                {{ $statSnapshot->crafting_rank > 0 ? number_format($statSnapshot->crafting_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $statSnapshot->crafting_level > 0 ? number_format($statSnapshot->crafting_level, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $statSnapshot->crafting_xp > 0 ? number_format($statSnapshot->crafting_xp, 0, '.', ',') : 'N/A' }}
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
                {{ $statSnapshot->smithing_rank > 0 ? number_format($statSnapshot->smithing_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $statSnapshot->smithing_level > 0 ? number_format($statSnapshot->smithing_level, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $statSnapshot->smithing_xp > 0 ? number_format($statSnapshot->smithing_xp, 0, '.', ',') : 'N/A' }}
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
                {{ $statSnapshot->mining_rank > 0 ? number_format($statSnapshot->mining_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $statSnapshot->mining_level > 0 ? number_format($statSnapshot->mining_level, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $statSnapshot->mining_xp > 0 ? number_format($statSnapshot->mining_xp, 0, '.', ',') : 'N/A' }}</td>
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
                {{ $statSnapshot->herblore_rank > 0 ? number_format($statSnapshot->herblore_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $statSnapshot->herblore_level > 0 ? number_format($statSnapshot->herblore_level, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $statSnapshot->herblore_xp > 0 ? number_format($statSnapshot->herblore_xp, 0, '.', ',') : 'N/A' }}
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
                {{ $statSnapshot->agility_rank > 0 ? number_format($statSnapshot->agility_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $statSnapshot->agility_level > 0 ? number_format($statSnapshot->agility_level, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $statSnapshot->agility_xp > 0 ? number_format($statSnapshot->agility_xp, 0, '.', ',') : 'N/A' }}
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
                {{ $statSnapshot->thieving_rank > 0 ? number_format($statSnapshot->thieving_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $statSnapshot->thieving_level > 0 ? number_format($statSnapshot->thieving_level, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $statSnapshot->thieving_xp > 0 ? number_format($statSnapshot->thieving_xp, 0, '.', ',') : 'N/A' }}
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
                {{ $statSnapshot->slayer_rank > 0 ? number_format($statSnapshot->slayer_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $statSnapshot->slayer_level > 0 ? number_format($statSnapshot->slayer_level, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $statSnapshot->slayer_xp > 0 ? number_format($statSnapshot->slayer_xp, 0, '.', ',') : 'N/A' }}</td>
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
                {{ $statSnapshot->farming_rank > 0 ? number_format($statSnapshot->farming_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $statSnapshot->farming_level > 0 ? number_format($statSnapshot->farming_level, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $statSnapshot->farming_xp > 0 ? number_format($statSnapshot->farming_xp, 0, '.', ',') : 'N/A' }}
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
                {{ $statSnapshot->runecraft_rank > 0 ? number_format($statSnapshot->runecraft_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $statSnapshot->runecraft_level > 0 ? number_format($statSnapshot->runecraft_level, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $statSnapshot->runecraft_xp > 0 ? number_format($statSnapshot->runecraft_xp, 0, '.', ',') : 'N/A' }}
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
                {{ $statSnapshot->hunter_rank > 0 ? number_format($statSnapshot->hunter_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $statSnapshot->hunter_level > 0 ? number_format($statSnapshot->hunter_level, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $statSnapshot->hunter_xp > 0 ? number_format($statSnapshot->hunter_xp, 0, '.', ',') : 'N/A' }}</td>

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
                {{ $statSnapshot->construction_rank > 0 ? number_format($statSnapshot->construction_rank, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $statSnapshot->construction_level > 0 ? number_format($statSnapshot->construction_level, 0, '.', ',') : 'N/A' }}
            </td>
            <td class="text-right">
                {{ $statSnapshot->construction_xp > 0 ? number_format($statSnapshot->construction_xp, 0, '.', ',') : 'N/A' }}
            </td>
        </tr>
    </table>
</div>
