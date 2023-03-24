<?php

namespace App\View\Components\Tables;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TotalActivitiesTable extends Component
{
    public $latestActivityStatSnapshots;
    public $player;
    /**
     * Create a new component instance.
     */
    public function __construct(
        $latestActivityStatSnapshots,
        $player,
    ) {
        $this->latestActivityStatSnapshots = $latestActivityStatSnapshots;
        $this->player = $player;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.tables.total-activities-table');
    }
}
