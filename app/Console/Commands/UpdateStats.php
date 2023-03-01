<?php

namespace App\Console\Commands;

use App\Jobs\UpdatePlayerStatsFromOsrsHighscoresApi;
use Illuminate\Console\Command;

class UpdateStats extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'osrs:update-stats {user=LunaarSky}';

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
        UpdatePlayerStatsFromOsrsHighscoresApi::dispatch($this->argument('user'));
    }
}
