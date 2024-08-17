<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Textarea extends Component
{
    /**
     * Create a new component instance.
     */
    public $placeholder;
    public $id;
    public $required;
    public $name;
    public function __construct($placeholder = '', $id = '', $required = false, $name = '')
    {
        $this->placeholder = $placeholder;
        $this->id = $id;
        $this->required = $required;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.textarea');
    }
}
