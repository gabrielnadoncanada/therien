<?php

namespace App\Http\Livewire;

use App\Repositories\AchievementRepository;
use App\Repositories\PartnerRepository;
use App\Repositories\ServiceRepository;
use App\Repositories\TestimonialRepository;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
	    return view('livewire.home', [
                'services' => app(ServiceRepository::class)->getAllSorted(),
                'testimonials' => app(TestimonialRepository::class)->getAllSorted(),
                'partners' => app(PartnerRepository::class)->getAllSorted(),
                'achievements' => app(AchievementRepository::class)->getAllFeatured()
            ]
        )->layout('layouts.app');
    }
}
