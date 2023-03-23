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
        $activityXpGraphData = $player->statSnapshots()->orderBy('created_at')->get(["{$activity}_score", 'created_at'])
            ->map(function ($activitySnapshot) use ($activity) {
                return [
                    'x' => $activitySnapshot->created_at->toDateString(),
                    'y' => $activitySnapshot->getAttribute("{$activity}_score")
                ];
            })
            ->toArray();

        $activityRankGraphData = $player->statSnapshots()->orderBy('created_at')->get(["{$activity}_rank", 'created_at'])
            ->map(function ($activitySnapshot) use ($activity) {
                return [
                    'x' => $activitySnapshot->created_at->toDateString(),
                    'y' => $activitySnapshot->getAttribute("{$activity}_rank")
                ];
            })
            ->toArray();

        return view('players.activities.show', [
            'player' => $player,
            'activity' => $activity,
            'activityData' => $activityData,
            'activityXpGraphData' => $activityXpGraphData,
            'activityRankGraphData' => $activityRankGraphData
        ]);
    }
}
