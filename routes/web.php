<?php

use App\Http\Controllers\ActivityStatsSnapshotController;
use App\Http\Controllers\BossStatsSnapshotController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PlayersController;
use App\Http\Controllers\SkillsController;
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

Route::get('/', [LandingController::class, 'show']);
Route::post('/search', [LandingController::class, 'searchPlayer']);

Route::get('/players/{osrsUsername}', [PlayersController::class, 'show']);
Route::post('/players/{osrsUsername}/refresh', [PlayersController::class, 'refresh']);

Route::get('/players/{osrsUsername}/skills/{skill}', [SkillsController::class, 'show']);
Route::get('/players/{osrsUsername}/bosses/{boss}', [BossStatsSnapshotController::class, 'show']);
Route::get('/players/{osrsUsername}/activities/{activity}', [ActivityStatsSnapshotController::class, 'show']);

Route::get('test', function () {
    // $response = Http::get('https://templeosrs.com/api/player_stats.php?player=lunaarsky');
});
