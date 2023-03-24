<?php

namespace App\View\Components\Graphs;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TotalBossRankGraph extends Component
{
    public $boss;
    public $bossRankGraphData;

    /**
     * Create a new component instance.
     */
    public function __construct(
        $boss,
        $bossRankGraphData
    ) {
        $this->boss = $boss;
        $this->bossRankGraphData = $bossRankGraphData;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.graphs.total-boss-rank-graph');
    }
}
