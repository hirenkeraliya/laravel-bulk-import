<?php

namespace HirenKeraliya\LaravelBulkImport;

use HirenKeraliya\LaravelBulkImport\Commands\LaravelBulkImportCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelBulkImportServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-bulk-import')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-bulk-import_table')
            ->hasCommand(LaravelBulkImportCommand::class);
    }
}
