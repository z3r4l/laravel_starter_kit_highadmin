<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BackLayouts extends Component
{
    /**
     * Create a new component instance.
     */
    public $title;
  
    public function __construct($title = null)
    {
        $this->title    = "Highadmin | $title" ?? "Highadmin"; 
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('back.layouts.main');
    }
}
