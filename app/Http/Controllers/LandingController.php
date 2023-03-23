<?php

namespace App\Http\Controllers;

use App\Jobs\UpdatePlayerStatsFromOsrsHighscoresApi;
use App\Models\Player;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function show()
    {
        return view('show');
    }

    public function searchPlayer(Request $request)
    {
        $player = $request->input('player');

        return redirect("/players/{$player}");
    }
}
