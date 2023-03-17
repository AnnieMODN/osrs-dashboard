<?php

namespace App\View\Components\Tables;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TotalBossKillsTable extends Component
{
    public $latestMinigameStatSnapshots;
    public $player;
    /**
     * Create a new component instance.
     */
    public function __construct(
        $latestMinigameStatSnapshots,
        $player
    ) {
        $this->latestMinigameStatSnapshots = $latestMinigameStatSnapshots;
        $this->player = $player;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.tables.total-boss-kills-table');
    }
}
