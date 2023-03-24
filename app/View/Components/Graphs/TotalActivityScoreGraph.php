<?php

namespace App\View\Components\Graphs;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TotalActivityScoreGraph extends Component
{
    public $activity;
    public $activityScoreGraphData;

    /**
     * Create a new component instance.
     */
    public function __construct(
        $activity,
        $activityScoreGraphData
    ) {
        $this->$activity = $activity;
        $this->activityScoreGraphData = $activityScoreGraphData;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.graphs.total-activity-score-graph');
    }
}
