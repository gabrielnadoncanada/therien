<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Page extends Component
{
	public $page;

	public function mount()
	{
		$this->page = \App\Models\Page::where('slug', '/' . $this->page)->first();
	}

    public function render()
    {
        return view('livewire.page');
    }
}
