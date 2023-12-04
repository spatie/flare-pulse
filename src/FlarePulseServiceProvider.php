<?php

namespace Spatie\FlarePulse;

use Livewire\Livewire;
use Spatie\FlarePulse\Livewire\FlarePulseCardComponent;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FlarePulseServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('flare-pulse')
            ->hasConfigFile()
            ->hasViews();
    }

    public function packageBooted()
    {
        Livewire::component('flare.pulse', FlarePulseCardComponent::class);
    }
}
