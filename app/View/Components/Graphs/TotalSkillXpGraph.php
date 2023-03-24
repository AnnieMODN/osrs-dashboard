<?php

namespace App\View\Components\Graphs;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TotalSkillXpGraph extends Component
{
    public $skill;
    public $skillXpGraphData;

    /**
     * Create a new component instance.
     */
    public function __construct(
        $skill,
        $skillXpGraphData
    ) {
        $this->skill = $skill;
        $this->skillXpGraphData = $skillXpGraphData;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.graphs.total-skill-xp-graph');
    }
}
