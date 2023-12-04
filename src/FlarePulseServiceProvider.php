<?php

namespace Spatie\FlarePulse;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Spatie\FlarePulse\Commands\FlarePulseCommand;

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

    }
}
