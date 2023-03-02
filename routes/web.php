<?php

use App\Http\Controllers\StatShapshotsController;
use App\Models\StatSnapshot;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $statSnapshots = StatSnapshot::get();
    $latestStatSnapshots = StatSnapshot::latest()->first();
    $totalXPGraphData = StatSnapshot::orderBy('created_at')->get(['overall_xp', 'created_at'])
        ->map(function ($statSnapshot) {
            return [
                'x' => $statSnapshot->created_at->toDateString(),
                'y' => $statSnapshot->overall_xp
            ];
        })
        ->toArray();
    $statLevels = collect(
        StatSnapshot::latest()->first(['attack_level', 'defence_level', 'strength_level', 'hitpoints_level', 'ranged_level', 'prayer_level', 'magic_level', 'cooking_level', 'woodcutting_level', 'fletching_level', 'fishing_level', 'firemaking_level', 'crafting_level', 'smithing_level', 'mining_level', 'herblore_level', 'agility_level', 'thieving_level', 'slayer_level', 'farming_level', 'runecraft_level', 'hunter_level', 'construction_level'])
            ->toArray()
    )
        ->mapWithKeys(function ($statLevel, $statName) {
            return [Str::headline($statName) => $statLevel];
        })
        ->toArray();

    return view('welcome', [
        'statSnapshots' => $statSnapshots,
        'latestStatSnapshot' => $latestStatSnapshots,
        'totalXPGraphData' => $totalXPGraphData,
        'statLevels' => $statLevels
    ]);
});

Route::get('/stat-snapshots/{statSnapshot}', [StatShapshotsController::class, 'show']);

Route::get('test', function () {
    // $response = Http::get('https://templeosrs.com/api/player_stats.php?player=lunaarsky');
});
