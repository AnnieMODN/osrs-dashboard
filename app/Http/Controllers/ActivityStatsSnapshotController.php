<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ActivityStatsSnapshotController extends Controller
{
    public function show(Player $player, $activity)
    {
        $activity = Str::of($activity)->replace('-', '_')->snake()->toString();

        $activityData = $player->statSnapshots()->latest()->first(["{$activity}_score", "{$activity}_rank"]);

        $statSnapshotLastSevenDays = $player->statSnapshots()
            ->where("{$activity}_rank", '>', 0)
            ->where('created_at', '>', now()->subDays(7))
            ->orderBy('created_at')
            ->get(["{$activity}_score", "{$activity}_rank", 'created_at']);

        $activityScoreGraphData = $statSnapshotLastSevenDays
            ->map(function ($activitySnapshot) use ($activity) {
                return [
                    'x' => $activitySnapshot->created_at->toDateString(),
                    'y' => $activitySnapshot->getAttribute("{$activity}_score")
                ];
            })
            ->toArray();

        $activityRankGraphData = $statSnapshotLastSevenDays
            ->map(function ($activitySnapshot) use ($activity) {
                return [
                    'x' => $activitySnapshot->created_at->toDateString(),
                    'y' => max($activitySnapshot->getAttribute("{$activity}_rank") ?? 0, 0)
                ];
            })
            ->toArray();

        return view('players.activities.show', [
            'player' => $player,
            'activity' => $activity,
            'activityData' => $activityData,
            'activityScoreGraphData' => $activityScoreGraphData,
            'activityRankGraphData' => $activityRankGraphData
        ]);
    }
}
