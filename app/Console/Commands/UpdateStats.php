<?php

namespace App\Console\Commands;

use App\Jobs\UpdatePlayerStatsFromOsrsHighscoresApi;
use App\Models\Player;
use Illuminate\Console\Command;

class UpdateStats extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'osrs:update-stats {player?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update player stats from osrs highscores API.';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        if ($this->argument('player')) {
            UpdatePlayerStatsFromOsrsHighscoresApi::dispatch($this->argument('player'));
        } else {
            Player::orderBy('id')->chunk(50, function ($players) {
                $players->each(function ($player) {
                    UpdatePlayerStatsFromOsrsHighscoresApi::dispatch($player->username);
                });
            });
        }
    }
}
