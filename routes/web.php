<?php

use App\Http\Livewire\Gallery;
use App\Http\Livewire\Home;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/galerie', Gallery::class)->name('gallery');
