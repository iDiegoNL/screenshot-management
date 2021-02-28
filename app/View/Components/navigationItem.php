<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class navigationItem extends Component
{
    public string $name;
    public string $routeName;

    public function __construct($name, $routeName)
    {
        $this->name = $name;
        $this->routeName = $routeName;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        return view('components.navigation-item');
    }
}
