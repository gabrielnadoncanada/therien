<?php

namespace App\Providers;

use App\Repositories\AchievementRepository;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Illuminate\Support\ServiceProvider;
use Filament\Forms;
use \App\Filament\FilamentSettings;
use Illuminate\Support\Facades\Schema;
use App\Repositories\ServiceRepository;
use App\Repositories\PartnerRepository;
use App\Repositories\TestimonialRepository;
use App\Repositories\ProjectRepository;

class AppServiceProvider extends ServiceProvider
{

    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ServiceRepository::class);
        $this->app->bind(PartnerRepository::class);
        $this->app->bind(TestimonialRepository::class);
        $this->app->bind(ProjectRepository::class);
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
        Schema::defaultStringLength(191);

    }
}
