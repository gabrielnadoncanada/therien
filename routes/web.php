<?php

use App\Http\Livewire\Form;
use App\Repositories\AchievementRepository;
use App\Repositories\PartnerRepository;
use App\Repositories\ProjectRepository;
use App\Repositories\ServiceRepository;
use App\Repositories\TestimonialRepository;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;

//Route::get('form', Form::class);
//Route::get('/', Home::class)->name('home');
//



Route::view('/', 'home', [
    'services' => Cache::remember('frontpage_services', 3600, function () {
        return app(ServiceRepository::class)->getAllSorted();
    }),
    'testimonials' => Cache::remember('frontpage_testimonials', 3600, function () {
        return app(TestimonialRepository::class)->getAllSorted();
    }),
    'partners' => Cache::remember('frontpage_partners', 3600, function () {
        return app(PartnerRepository::class)->getAllSorted();
    }),
    'projects' => Cache::remember('frontpage_projects', 3600, function () {
        return app(ProjectRepository::class)->getAllSorted();
    }),
])->name('home');


Route::view('/gallerie', 'gallery', [
    'services' => Cache::remember('frontpage_services', 3600, function () {
        return app(ServiceRepository::class)->getAllSorted();
    }),
    'achievements' => app(AchievementRepository::class)->getAllSorted(),
])->name('gallery');

//Route::get('/', \App\Http\Livewire\FrontPage::class)->name('home');
//Route::get('{page:slug}', \App\Http\Livewire\Page::class);
//Route::get('/blog/{post:slug}', \App\Http\Livewire\Blog\Post::class);


Route::middleware('guest')->group(function () {
    Route::get('/login', app\Filament\Pages\Auth\Login::class)->name('login');
});
