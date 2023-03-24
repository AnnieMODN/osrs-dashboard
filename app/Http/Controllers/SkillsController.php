<?php

namespace App\Http\Controllers;

use App\Jobs\UpdatePlayerStatsFromOsrsHighscoresApi;
use App\Models\Player;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function show(Player $player, $skill)
    {
        $statsData = $player->statSnapshots()->latest()->first(["{$skill}_xp", "{$skill}_rank", "{$skill}_level"]);

        $statSnapshotLastSevenDays = $player->statSnapshots()
            ->where("{$skill}_xp", '>', 0)
            ->where('created_at', '>', now()->subDays(7))
            ->orderBy('created_at')
            ->get(["{$skill}_rank", "{$skill}_xp", 'created_at']);

        $skillXpGraphData = $statSnapshotLastSevenDays
            ->map(function ($statSnapshot) use ($skill) {
                return [
                    'x' => $statSnapshot->created_at->toDateString(),
                    'y' => $statSnapshot->getAttribute("{$skill}_xp")
                ];
            })
            ->toArray();

        $skillRankGraphData = $statSnapshotLastSevenDays
            ->map(function ($statSnapshot) use ($skill) {
                return [
                    'x' => $statSnapshot->created_at->toDateString(),
                    'y' => $statSnapshot->getAttribute("{$skill}_rank")
                ];
            })
            ->toArray();

        return view('players.skills.show', [
            'player' => $player,
            'skill' => $skill,
            'statsData' => $statsData,
            'skillXpGraphData' => $skillXpGraphData,
            'skillRankGraphData' => $skillRankGraphData
        ]);
    }
}
