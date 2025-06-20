<?php

namespace BcConnector\LaravelBcConnector;

use BcConnector\LaravelBcConnector\Commands\LaravelBcConnectorCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelBcConnectorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-bc-connector')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_bc_connector_table')
            ->hasCommand(LaravelBcConnectorCommand::class);
    }
}
