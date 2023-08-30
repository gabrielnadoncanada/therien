<?php

namespace App\Filament;

use Reworck\FilamentSettings\Pages\Settings;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentSettingsProvider extends PackageServiceProvider
{

    public static string $name = 'filament-settings';

    protected function getPages(): array
    {
        return [
            Settings::class,
        ];
    }

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name);
    }

}
