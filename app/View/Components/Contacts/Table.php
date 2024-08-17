<?php

namespace App\View\Components\Contacts;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Table extends Component
{
    /**
     * Create a new component instance.
     */

    public $contacts;
    public function __construct($contacts = [])
    {
        $this->contacts = $contacts;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.contacts.table');
    }
}
