<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    /**
     * Create a new component instance.
     */
    public $type;
    public $placeholder;
    public $value;
    public $id;
    public $required;
    public $name;

    public function __construct($type = 'text', $placeholder = '', $value = '', $id = '', $required = false, $name = '')
    {
        $this->type = $type;
        $this->placeholder = $placeholder;
        $this->value = $value;
        $this->id = $id;
        $this->required = $required;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
