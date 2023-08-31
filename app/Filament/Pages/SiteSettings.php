<?php

namespace App\Filament\Pages;

use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Pages\Page;
use App\Filament\FilamentSettings;
use Spatie\Valuestore\Valuestore;

class SiteSettings extends Page implements HasForms
{
    use InteractsWithForms;

    public array $data;
    protected static ?string $navigationIcon = 'heroicon-o-cog';
    protected static string $view = 'filament.pages.settings';

    protected function getFormStatePath(): string
    {
        return 'data';
    }

    protected function getFormSchema(): array
    {
        return FilamentSettings::$fields;
    }

    public function mount(): void
    {
        $this->form->fill(
            Valuestore::make(
                config('filament-settings.path')
            )->all()
        );
    }

    public function submit(): void
    {
        $this->validate();



        foreach ($this->data as $key => $data) {
            Valuestore::make(
                config('filament-settings.path')
            )->put($key, $data);
        }
    }

    public static function getNavigationGroup(): ?string
    {
        return config('filament-settings.group');
    }

    public static function getNavigationLabel(): string
    {
        return config('filament-settings.label');
    }

    public function getTitle(): string
    {
        return config("filament-settings.title");
    }

    public static function shouldRegisterNavigation(): bool
    {
        return true;
    }
}
