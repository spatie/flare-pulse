<?php

namespace Spatie\FlarePulse;

use Spatie\FlarePulse\Commands\FlarePulseCommand;
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

    }
}
