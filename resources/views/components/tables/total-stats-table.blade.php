<div class="row-span-2 h-auto w-full rounded-lg bg-white p-8 shadow-sm">
    <div class="mb-6 flex flex-col text-center text-xl font-bold">Personal stats for {{ $player->username }}</div>
    <table class="w-full">
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
            <td class="text-right">{{ number_format($groupedStats->overall_rank, 0, '.', ',') }}</td>
            <td class="text-right">{{ number_format($groupedStats->overall_level, 0, '.', ',') }}</td>
            <td class="text-right">{{ number_format($groupedStats->overall_xp, 0, '.', ',') }}</td>

        </tr>
        <tr>
            <td></td>
            <td class="text-left">Attack</td>
            <td class="text-right">{{ number_format($groupedStats->attack_rank, 0, '.', ',') }}</td>
            <td class="text-right">{{ number_format($groupedStats->attack_level, 0, '.', ',') }}</td>
            <td class="text-right">{{ number_format($groupedStats->attack_xp, 0, '.', ',') }}</td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Defence</td>
            <td class="text-right">{{ number_format($groupedStats->defence_rank, 0, '.', ',') }}</td>
            <td class="text-right">{{ number_format($groupedStats->defence_level, 0, '.', ',') }}</td>
            <td class="text-right">{{ number_format($groupedStats->defence_xp, 0, '.', ',') }}</td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Strength</td>
            <td class="text-right">{{ number_format($groupedStats->strength_rank, 0, '.', ',') }}</td>
            <td class="text-right">{{ number_format($groupedStats->strength_level, 0, '.', ',') }}</td>
            <td class="text-right">{{ number_format($groupedStats->strength_xp, 0, '.', ',') }}</td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Hitpoints</td>
            <td class="text-right">{{ number_format($groupedStats->hitpoints_rank, 0, '.', ',') }}</td>
            <td class="text-right">{{ number_format($groupedStats->hitpoints_level, 0, '.', ',') }}</td>
            <td class="text-right">{{ number_format($groupedStats->hitpoints_xp, 0, '.', ',') }}</td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Ranged</td>
            <td class="text-right">{{ number_format($groupedStats->ranged_rank, 0, '.', ',') }}</td>
            <td class="text-right">{{ number_format($groupedStats->ranged_level, 0, '.', ',') }}</td>
            <td class="text-right">{{ number_format($groupedStats->ranged_xp, 0, '.', ',') }}</td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Prayer</td>
            <td class="text-right">{{ number_format($groupedStats->prayer_rank, 0, '.', ',') }}</td>
            <td class="text-right">{{ number_format($groupedStats->prayer_level, 0, '.', ',') }}</td>
            <td class="text-right">{{ number_format($groupedStats->prayer_xp, 0, '.', ',') }}</td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Magic</td>
            <td class="text-right">{{ number_format($groupedStats->magic_rank, 0, '.', ',') }}</td>
            <td class="text-right">{{ number_format($groupedStats->magic_level, 0, '.', ',') }}</td>
            <td class="text-right">{{ number_format($groupedStats->magic_xp, 0, '.', ',') }}</td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Cooking</td>
            <td class="text-right">{{ number_format($groupedStats->cooking_rank, 0, '.', ',') }}</td>
            <td class="text-right">{{ number_format($groupedStats->cooking_level, 0, '.', ',') }}</td>
            <td class="text-right">{{ number_format($groupedStats->cooking_xp, 0, '.', ',') }}</td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Woodcutting</td>
            <td class="text-right">{{ number_format($groupedStats->woodcutting_rank, 0, '.', ',') }}</td>
            <td class="text-right">{{ number_format($groupedStats->woodcutting_level, 0, '.', ',') }}</td>
            <td class="text-right">{{ number_format($groupedStats->woodcutting_xp, 0, '.', ',') }}</td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Fletching</td>
            <td class="text-right">{{ number_format($groupedStats->fletching_rank, 0, '.', ',') }}</td>
            <td class="text-right">{{ number_format($groupedStats->fletching_level, 0, '.', ',') }}</td>
            <td class="text-right">{{ number_format($groupedStats->fletching_xp, 0, '.', ',') }}</td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Fishing</td>
            <td class="text-right">{{ number_format($groupedStats->fishing_rank, 0, '.', ',') }}</td>
            <td class="text-right">{{ number_format($groupedStats->fishing_level, 0, '.', ',') }}</td>
            <td class="text-right">{{ number_format($groupedStats->fishing_xp, 0, '.', ',') }}</td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Firemaking</td>
            <td class="text-right">{{ number_format($groupedStats->firemaking_rank, 0, '.', ',') }}</td>
            <td class="text-right">{{ number_format($groupedStats->firemaking_level, 0, '.', ',') }}</td>
            <td class="text-right">{{ number_format($groupedStats->firemaking_xp, 0, '.', ',') }}</td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Crafting</td>
            <td class="text-right">{{ number_format($groupedStats->crafting_rank, 0, '.', ',') }}</td>
            <td class="text-right">{{ number_format($groupedStats->crafting_level, 0, '.', ',') }}</td>
            <td class="text-right">{{ number_format($groupedStats->crafting_xp, 0, '.', ',') }}</td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Smithing</td>
            <td class="text-right">{{ number_format($groupedStats->smithing_rank, 0, '.', ',') }}</td>
            <td class="text-right">{{ number_format($groupedStats->smithing_level, 0, '.', ',') }}</td>
            <td class="text-right">{{ number_format($groupedStats->smithing_xp, 0, '.', ',') }}</td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Mining</td>
            <td class="text-right">{{ number_format($groupedStats->mining_rank, 0, '.', ',') }}</td>
            <td class="text-right">{{ number_format($groupedStats->mining_level, 0, '.', ',') }}</td>
            <td class="text-right">{{ number_format($groupedStats->mining_xp, 0, '.', ',') }}</td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Herblore</td>
            <td class="text-right">{{ number_format($groupedStats->herblore_rank, 0, '.', ',') }}</td>
            <td class="text-right">{{ number_format($groupedStats->herblore_level, 0, '.', ',') }}</td>
            <td class="text-right">{{ number_format($groupedStats->herblore_xp, 0, '.', ',') }}</td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Agility</td>
            <td class="text-right">{{ number_format($groupedStats->agility_rank, 0, '.', ',') }}</td>
            <td class="text-right">{{ number_format($groupedStats->agility_level, 0, '.', ',') }}</td>
            <td class="text-right">{{ number_format($groupedStats->agility_xp, 0, '.', ',') }}</td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Thieving</td>
            <td class="text-right">{{ number_format($groupedStats->thieving_rank, 0, '.', ',') }}</td>
            <td class="text-right">{{ number_format($groupedStats->thieving_level, 0, '.', ',') }}</td>
            <td class="text-right">{{ number_format($groupedStats->thieving_xp, 0, '.', ',') }}</td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Slayer</td>
            <td class="text-right">{{ number_format($groupedStats->slayer_rank, 0, '.', ',') }}</td>
            <td class="text-right">{{ number_format($groupedStats->slayer_level, 0, '.', ',') }}</td>
            <td class="text-right">{{ number_format($groupedStats->slayer_xp, 0, '.', ',') }}</td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Farming</td>
            <td class="text-right">{{ number_format($groupedStats->farming_rank, 0, '.', ',') }}</td>
            <td class="text-right">{{ number_format($groupedStats->farming_level, 0, '.', ',') }}</td>
            <td class="text-right">{{ number_format($groupedStats->farming_xp, 0, '.', ',') }}</td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Runecraft</td>
            <td class="text-right">{{ number_format($groupedStats->runecraft_rank, 0, '.', ',') }}</td>
            <td class="text-right">{{ number_format($groupedStats->runecraft_level, 0, '.', ',') }}</td>
            <td class="text-right">{{ number_format($groupedStats->runecraft_xp, 0, '.', ',') }}</td>
        </tr>
        <tr>
            <td></td>
            <td class="text-left">Hunter</td>
            <td class="text-right">{{ number_format($groupedStats->hunter_rank, 0, '.', ',') }}</td>
            <td class="text-right">{{ number_format($groupedStats->hunter_level, 0, '.', ',') }}</td>
            <td class="text-right">{{ number_format($groupedStats->hunter_xp, 0, '.', ',') }}</td>

        </tr>
        <tr>
            <td></td>
            <td class="text-left">Construction</td>
            <td class="text-right">{{ number_format($groupedStats->construction_rank, 0, '.', ',') }}</td>
            <td class="text-right">{{ number_format($groupedStats->construction_level, 0, '.', ',') }}</td>
            <td class="text-right">{{ number_format($groupedStats->construction_xp, 0, '.', ',') }}</td>

        </tr>
    </table>
</div>
