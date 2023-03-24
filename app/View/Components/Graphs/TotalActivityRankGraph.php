<?php

namespace App\View\Components\Graphs;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TotalActivityRankGraph extends Component
{
    public $activity;
    public $activityRankGraphData;

    /**
     * Create a new component instance.
     */
    public function __construct(
        $activity,
        $activityRankGraphData
    ) {
        $this->activity = $activity;
        $this->activityRankGraphData = $activityRankGraphData;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.graphs.total-activity-rank-graph');
    }
}
