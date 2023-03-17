<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PlayersController extends Controller
{
    public function show(Player $player)
    {
        $statSnapshots = $player->statSnapshots()->get();
        $minigameStatSnapshots = $player->minigameStatSnapshots()->get();
        $latestStatSnapshot = $player->statSnapshots()->latest()->first();
        $latestMinigameStatSnapshots = $player->minigameStatSnapshots()->latest()->first();
        $totalXPGraphData = $player->statSnapshots()->orderBy('created_at')->get(['overall_xp', 'created_at'])
            ->map(function ($statSnapshot) {
                return [
                    'x' => $statSnapshot->created_at->toDateString(),
                    // 'y' => $this->shortNumber($statSnapshot->overall_xp)
                    'y' => $statSnapshot->overall_xp
                ];
            })
            ->toArray();
        $statLevels = collect(
            $player->statSnapshots()->latest()->first(['attack_level', 'defence_level', 'strength_level', 'hitpoints_level', 'ranged_level', 'prayer_level', 'magic_level', 'cooking_level', 'woodcutting_level', 'fletching_level', 'fishing_level', 'firemaking_level', 'crafting_level', 'smithing_level', 'mining_level', 'herblore_level', 'agility_level', 'thieving_level', 'slayer_level', 'farming_level', 'runecraft_level', 'hunter_level', 'construction_level'])
                ->toArray()
        )
            ->mapWithKeys(function ($statLevel, $statName) {
                return [Str::headline($statName) => $statLevel];
            })
            ->toArray();

        $groupedStats = collect(
            $latestStatSnapshot
                ->toArray()
        )
            ->reject(function ($item, $key) {
                return in_array($key, ['id', 'created_at', 'updated_at']);
            })
            ->chunk(3)
            ->mapWithKeys(function ($group) {
                return [
                    explode('_', $group->keys()->first())[0] => $group,
                ];
            });

        return view('players.show', [
            'player' => $player,
            'statSnapshots' => $statSnapshots,
            'minigameStatSnapshots' => $minigameStatSnapshots,
            'latestStatSnapshot' => $latestStatSnapshot,
            'latestMinigameStatSnapshots' => $latestMinigameStatSnapshots,
            'totalXPGraphData' => $totalXPGraphData,
            'statLevels' => $statLevels,
            'groupedStats' => $groupedStats
        ]);
    }
}
