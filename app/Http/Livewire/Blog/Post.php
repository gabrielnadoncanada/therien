<?php

namespace App\Http\Livewire\Blog;

use Livewire\Component;

class Post extends Component
{
	public $post;

	public function mount()
	{
		$this->post = \App\Models\Blog\Post::where('slug', $this->post)->first();
	}

	public function render()
	{
		return view('livewire.blog.post');
	}
}
