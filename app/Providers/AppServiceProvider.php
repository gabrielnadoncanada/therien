<?php

namespace App\Providers;

use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Illuminate\Support\ServiceProvider;
use Filament\Forms;
use \App\Filament\FilamentSettings;


class AppServiceProvider extends ServiceProvider
{

    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        FilamentSettings::setFormFields([
            SpatieMediaLibraryFileUpload::make('logo')
                                        ->disableLabel(),

        ]);
    }
}
