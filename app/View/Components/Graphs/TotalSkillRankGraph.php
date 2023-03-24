<?php

namespace App\View\Components\Graphs;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TotalSkillRankGraph extends Component
{
    public $skill;
    public $skillRankGraphData;

    /**
     * Create a new component instance.
     */
    public function __construct(
        $skill,
        $skillRankGraphData
    ) {
        $this->skill = $skill;
        $this->skillRankGraphData = $skillRankGraphData;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.graphs.total-skill-rank-graph');
    }
}
