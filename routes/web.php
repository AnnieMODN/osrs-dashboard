<?php

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
    return view('welcome');
});

Route::get('test', function () {
    // $response = Http::get('https://templeosrs.com/api/player_stats.php?player=lunaarsky');
    $response = Http::get('https://secure.runescape.com/m=hiscore_oldschool/index_lite.ws?player=LunaarSky');

    if ($response->failed()) {
        throw new \Exception("Error Processing Request", 1);
    }

    $data = Str::of($response->body())
        ->replace("\n", ",")
        ->explode(',')
        ->map(function ($value) {
            return (int) $value;
        })
        ->toArray();

    // return $data;

    return StatSnapshot::create([
        'overall_rank' => $data[0],
        'overall_level' => $data[1],
        'overall_xp' => $data[2],
        'attack_rank' => $data[3],
        'attack_level' => $data[4],
        'attack_xp' => $data[5],
        'defence_rank' => $data[6],
        'defence_level' => $data[7],
        'defence_xp' => $data[8],
        'strength_rank' => $data[9],
        'strength_level' => $data[10],
        'strength_xp' => $data[11],
        'hitpoints_rank' => $data[12],
        'hitpoints_level' => $data[13],
        'hitpoints_xp' => $data[14],
        'ranged_rank' => $data[15],
        'ranged_level' => $data[16],
        'ranged_xp' => $data[17],
        'prayer_rank' => $data[18],
        'prayer_level' => $data[19],
        'prayer_xp' => $data[20],
        'magic_rank' => $data[21],
        'magic_level' => $data[22],
        'magic_xp' => $data[23],
        'cooking_rank' => $data[24],
        'cooking_level' => $data[25],
        'cooking_xp' => $data[26],
        'woodcutting_rank' => $data[27],
        'woodcutting_level' => $data[28],
        'woodcutting_xp' => $data[29],
        'fletching_rank' => $data[30],
        'fletching_level' => $data[31],
        'fletching_xp' => $data[32],
        'fishing_rank' => $data[33],
        'fishing_level' => $data[34],
        'fishing_xp' => $data[35],
        'firemaking_rank' => $data[36],
        'firemaking_level' => $data[37],
        'firemaking_xp' => $data[38],
        'crafting_rank' => $data[39],
        'crafting_level' => $data[40],
        'crafting_xp' => $data[41],
        'smithing_rank' => $data[42],
        'smithing_level' => $data[43],
        'smithing_xp' => $data[44],
        'mining_rank' => $data[45],
        'mining_level' => $data[46],
        'mining_xp' => $data[47],
        'herblore_rank' => $data[48],
        'herblore_level' => $data[49],
        'herblore_xp' => $data[50],
        'agility_rank' => $data[51],
        'agility_level' => $data[52],
        'agility_xp' => $data[53],
        'thieving_rank' => $data[54],
        'thieving_level' => $data[55],
        'thieving_xp' => $data[56],
        'slayer_rank' => $data[57],
        'slayer_level' => $data[58],
        'slayer_xp' => $data[59],
        'farming_rank' => $data[60],
        'farming_level' => $data[61],
        'farming_xp' => $data[62],
        'runecraft_rank' => $data[63],
        'runecraft_level' => $data[64],
        'runecraft_xp' => $data[65],
        'hunter_rank' => $data[66],
        'hunter_level' => $data[67],
        'hunter_xp' => $data[68],
        'construction_rank' => $data[69],
        'construction_level' => $data[70],
        'construction_xp' => $data[71],
    ]);
});
