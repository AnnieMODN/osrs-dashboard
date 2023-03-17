<?php

namespace App\View\Components\Graphs;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TotalStatLevels extends Component
{

    public $statLevels;

    /**
     * Create a new component instance.
     */
    public function __construct($statLevels)
    {
        $this->statLevels = $statLevels;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.graphs.total-stat-levels');
    }
}
