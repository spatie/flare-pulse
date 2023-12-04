<?php

namespace Spatie\FlarePulse;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Spatie\FlarePulse\Commands\FlarePulseCommand;

class FlarePulseServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('flare-pulse')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_flare-pulse_table')
            ->hasCommand(FlarePulseCommand::class);
    }
}
