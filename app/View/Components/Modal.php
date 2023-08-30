<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Modal extends Component
{
	public $title;

	public $id;

	public function __construct($title, $id)
	{
		$this->title = $title;

		$this->id = $id;
	}

	public function render()
	{
		return view('components.modal');
	}
}
