<?php

use App\Http\Livewire\Form;
use Illuminate\Support\Facades\Route;

//Route::get('form', Form::class);
//Route::get('/', Home::class)->name('home');
//


Route::get('/', \App\Http\Livewire\FrontPage::class)->name('home');

//Route::get('{page:slug}', \App\Http\Livewire\Page::class);
//Route::get('/blog/{post:slug}', \App\Http\Livewire\Blog\Post::class);


Route::middleware('guest')->group(function () {
    Route::get('/login', app\Filament\Pages\Auth\Login::class)->name('login');
});
