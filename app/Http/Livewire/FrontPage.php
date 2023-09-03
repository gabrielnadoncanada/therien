<?php

namespace App\Http\Livewire;

use App\Repositories\ServiceRepository;
use App\Repositories\PartnerRepository;
use App\Repositories\TestimonialRepository;
use Livewire\Component;
use Illuminate\Support\Facades\Cache;

class FrontPage extends Component
{
    public function services()
    {
        return Cache::remember('frontpage_services', 3600, function () {
            return app(ServiceRepository::class)->getAllSorted();
        });
    }

    public function testimonials()
    {
        return Cache::remember('frontpage_testimonials', 3600, function () {
            return app(TestimonialRepository::class)->getAllSorted();
        });
    }

    public function partners()
    {
        return Cache::remember('frontpage_partners', 3600, function () {
            return app(PartnerRepository::class)->getAllSorted();
        });
    }

    public function render()
    {
        return view('livewire.front-page', [
            'services' => $this->services(),
            'testimonials' => $this->testimonials(),
            'partners' => $this->partners(),
        ]);
    }
}
