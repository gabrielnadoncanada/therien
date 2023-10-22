<?php

namespace App\Http\Livewire;

use App\Repositories\AchievementRepository;
use App\Repositories\ServiceRepository;
use Livewire\Component;

class Gallery extends Component
{
    public function render()
    {
        return view('livewire.gallery', [
            'services' => app(ServiceRepository::class)->getAllSorted(),
            'achievements' => app(AchievementRepository::class)->getAllSorted(),
        ])->layout('layouts.app');
    }
}
