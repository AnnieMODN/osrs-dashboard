<?php

namespace App\View\Components\Graphs;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TotalBossScoreGraph extends Component
{
    public $boss;
    public $bossScoreGraphData;

    /**
     * Create a new component instance.
     */
    public function __construct(
        $boss,
        $bossScoreGraphData
    ) {
        $this->boss = $boss;
        $this->bossScoreGraphData = $bossScoreGraphData;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.graphs.total-boss-score-graph');
    }
}
