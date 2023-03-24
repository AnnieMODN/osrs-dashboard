<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BossStatsSnapshotController extends Controller
{
    public function show(Player $player, $boss)
    {
        $boss = Str::of($boss)->replace('-', '_')->snake()->toString();

        $bossData = $player->statSnapshots()->latest()->first(["{$boss}_score", "{$boss}_rank"]);

        $statSnapshotLastSevenDays = $player
            ->statSnapshots()->where("{$boss}_score", '>', 0)
            ->where('created_at', '>', now()->subDays(7))
            ->orderBy('created_at')
            ->get(["{$boss}_score", "{$boss}_rank", 'created_at']);

        $bossScoreGraphData = $statSnapshotLastSevenDays
            ->map(function ($bossSnapshot) use ($boss) {
                return [
                    'x' => $bossSnapshot->created_at->toDateString(),
                    'y' => $bossSnapshot->getAttribute("{$boss}_score")
                ];
            })
            ->toArray();

        $bossRankGraphData = $statSnapshotLastSevenDays
            ->map(function ($bossSnapshot) use ($boss) {
                return [
                    'x' => $bossSnapshot->created_at->toDateString(),
                    'y' => $bossSnapshot->getAttribute("{$boss}_rank")
                ];
            })
            ->toArray();

        return view('players.bosses.show', [
            'player' => $player,
            'boss' => $boss,
            'bossData' => $bossData,
            'bossScoreGraphData' => $bossScoreGraphData,
            'bossRankGraphData' => $bossRankGraphData
        ]);
    }
}
