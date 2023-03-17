<?php

namespace App\View\Components\Graphs;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TotalXpGraph extends Component
{

    public $totalXPGraphData;

    /**
     * Create a new component instance.
     */
    public function __construct($totalXPGraphData)
    {
        $this->totalXPGraphData = $totalXPGraphData;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.graphs.total-xp-graph');
    }
}
