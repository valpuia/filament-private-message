<?php

namespace Valpuia\FilamentPrivateMessage;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\Support\Assets\Theme;
use Filament\Support\Color;
use Filament\Support\Facades\FilamentAsset;

class FilamentPrivateMessage implements Plugin
{
    public function getId(): string
    {
        return 'filament-private-message';
    }

    public function register(Panel $panel): void
    {
        FilamentAsset::register([
            Theme::make('filament-private-message', __DIR__ . '/../resources/dist/filament-private-message.css'),
        ]);

        $panel
            ->font('DM Sans')
            ->primaryColor(Color::Amber)
            ->secondaryColor(Color::Gray)
            ->warningColor(Color::Amber)
            ->dangerColor(Color::Rose)
            ->successColor(Color::Green)
            ->grayColor(Color::Gray)
            ->theme('filament-private-message');
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
