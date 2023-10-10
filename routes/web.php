<?php

use App\Repositories\AchievementRepository;
use App\Repositories\PartnerRepository;
use App\Repositories\ServiceRepository;
use App\Repositories\TestimonialRepository;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home', [
    'services' => app(ServiceRepository::class)->getAllSorted(),
    'testimonials' => app(TestimonialRepository::class)->getAllSorted(),
    'partners' => app(PartnerRepository::class)->getAllSorted(),
    'achievements' => app(AchievementRepository::class)->getAllFeatured()
])->name('home');

Route::view('/gallerie', 'gallery', [
    'services' => app(ServiceRepository::class)->getAllSorted(),
    'achievements' => app(AchievementRepository::class)->getAllSorted(),
])->name('gallery');

Route::middleware('guest')->group(function () {
    Route::get('/login', app\Filament\Pages\Auth\Login::class)->name('login');
});
