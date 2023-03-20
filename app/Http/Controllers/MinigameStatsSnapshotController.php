<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MinigameStatsSnapshotController extends Controller
{
    public function show(Player $player, $minigame)
    {
        $minigame = Str::of($minigame)->replace('-', '_')->snake()->toString();

        $minigameData = $player->minigameStatSnapshots()->latest()->first(["{$minigame}_score", "{$minigame}_rank"]);
        $minigameXpGraphData = $player->minigameStatSnapshots()->orderBy('created_at')->get(["{$minigame}_score", 'created_at'])
            ->map(function ($minigameSnapshot) use ($minigame) {
                return [
                    'x' => $minigameSnapshot->created_at->toDateString(),
                    'y' => $minigameSnapshot->getAttribute("{$minigame}_score")
                ];
            })
            ->toArray();

        $minigameRankGraphData = $player->minigameStatSnapshots()->orderBy('created_at')->get(["{$minigame}_rank", 'created_at'])
            ->map(function ($minigameSnapshot) use ($minigame) {
                return [
                    'x' => $minigameSnapshot->created_at->toDateString(),
                    'y' => $minigameSnapshot->getAttribute("{$minigame}_rank")
                ];
            })
            ->toArray();

        return view('players.minigames.show', [
            'player' => $player,
            'minigame' => $minigame,
            'minigameData' => $minigameData,
            'minigameXpGraphData' => $minigameXpGraphData,
            'minigameRankGraphData' => $minigameRankGraphData
        ]);
    }
}
