<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Traits\Themeable;

class Badge extends Component
{
    use Themeable;

    public function __construct($theme = 'default')
    {
        $this->theme = $theme;
    }

    public function render()
    {
        return view('blade-components::components.badge');
    }
}
