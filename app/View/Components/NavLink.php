<?php

namespace App\View\Components;

use App\Traits\Themeable;
use Illuminate\View\Component;

class NavLink extends Component
{
	use Themeable;
	public $route;

	public function __construct($route = '', $theme = 'default' )
	{
		$this->route = $route;
		$this->theme = $this->isActive() ? 'active' : $theme;

	}

	public function isActive()
	{
		return request()->route()->getName() === $this->route;
	}

	public function render()
	{
		return view('components.nav-link');
	}
}
