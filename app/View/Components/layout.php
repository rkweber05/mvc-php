<?php

namespace App\View\Components;

use Illuminate\View\Component;

class layout extends Component
{
    /**
     * Create a new component instance.
     */

    public string $title;

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.layout');
    }
}
