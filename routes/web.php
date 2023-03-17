<?php

use App\Http\Controllers\PlayersController;
use App\Http\Controllers\SkillsController;
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

Route::get('/players/{player:username}', [PlayersController::class, 'show']);

Route::get('/players/{player:username}/skills/{skill}', [SkillsController::class, 'show']);

// Route::get('/stat-snapshots/{statSnapshot}', [StatShapshotsController::class, 'show']);

Route::get('test', function () {
    // $response = Http::get('https://templeosrs.com/api/player_stats.php?player=lunaarsky');
});
