<?php

namespace App\Http\Controllers;

use App\Jobs\UpdatePlayerStatsFromOsrsHighscoresApi;
use App\Models\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PlayersController extends Controller
{
    public function show(Player $player)
    {

        $latestStatSnapshot = $player->statSnapshots()->latest()->first();

        $statSnapshotLast7Days = $player->statSnapshots()->where('created_at', '>', now()->subDays(7))->get();

        $totalXPGraphData = $player->statSnapshots()->orderBy('created_at')->get(['overall_xp', 'created_at'])
            ->map(function ($statSnapshot) {
                return [
                    'x' => $statSnapshot->created_at->toDateString(),
                    'y' => $statSnapshot->overall_xp
                ];
            })
            ->toArray();

        $totalRankGraphData = $player->statSnapshots()->orderBy('created_at')->get(['overall_rank', 'created_at'])
            ->map(function ($statSnapshot) {
                return [
                    'x' => $statSnapshot->created_at->toDateString(),
                    'y' => $statSnapshot->overall_rank
                ];
            })
            ->toArray();

        return view('players.show', [
            'player' => $player,
            'latestStatSnapshot' => $latestStatSnapshot,
            'statSnapshotLast7Days' => $statSnapshotLast7Days,
            'totalXPGraphData' => $totalXPGraphData,
            'totalRankGraphData' => $totalRankGraphData,
        ]);
    }

    public function refresh(Player $player)
    {
        if (!$player->refreshable()) {
            return redirect()->back();
        }

        UpdatePlayerStatsFromOsrsHighscoresApi::dispatch($player->username);

        return redirect()->back();
    }
}
