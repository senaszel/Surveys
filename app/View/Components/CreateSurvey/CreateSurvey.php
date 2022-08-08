<?php

namespace App\View\Components\CreateSurvey;

use Illuminate\View\Component;

class CreateSurvey extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.createSurvey.createSurvey');
    }
}
