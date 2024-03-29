<?php

namespace App\View\Components\Tables;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TotalStatsTable extends Component
{
    public $statSnapshot;
    public $player;

    /**
     * Create a new component instance.
     */
    public function __construct(
        $statSnapshot,
        $player
    ) {
        $this->statSnapshot = $statSnapshot;
        $this->player = $player;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.tables.total-stats-table');
    }
}
