<?php

namespace App\Http\Controllers;

use App\Jobs\UpdatePlayerStatsFromOsrsHighscoresApi;
use App\Models\Player;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function show(Player $player, $skill)
    {
        // return $latestStatSnapshot = $player->statSnapshots()->get(["{$skill}_xp", "{$skill}_rank"]);

        $statsData = $player->statSnapshots()->latest()->first(["{$skill}_xp", "{$skill}_rank", "{$skill}_level"]);
        $skillXpGraphData = $player->statSnapshots()->orderBy('created_at')->get(["{$skill}_xp", 'created_at'])
            ->map(function ($statSnapshot) use ($skill) {
                return [
                    'x' => $statSnapshot->created_at->toDateString(),
                    'y' => $statSnapshot->getAttribute("{$skill}_xp")
                ];
            })
            ->toArray();

        $skillRankGraphData = $player->statSnapshots()->orderBy('created_at')->get(["{$skill}_rank", 'created_at'])
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
