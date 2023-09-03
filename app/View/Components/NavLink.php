<?php

namespace App\View\Components;

use App\Traits\Themeable;
use Illuminate\View\Component;

class NavLink extends Component
{
	use Themeable;
	public mixed $route;
	public $link;

	public function __construct($route = '',$link = '', $theme = 'default' )
	{
		$this->route = $route;
		$this->link = $link;


		$this->theme = $this->isActive() ? 'active' : $theme;
	}

	public function isActive(): bool
    {
		return request()->route()->getName() === $this->route;
	}

	public function render()
	{
		return view('components.nav-link');
	}
}
