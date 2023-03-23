<?php

namespace App\View\Components\Graphs;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TotalRankGraph extends Component
{

    public $totalRankGraphData;

    /**
     * Create a new component instance.
     */
    public function __construct($totalRankGraphData)
    {
        $this->totalRankGraphData = $totalRankGraphData;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.graphs.total-rank-graph');
    }
}
