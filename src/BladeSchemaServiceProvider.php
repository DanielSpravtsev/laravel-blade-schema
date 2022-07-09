<?php

namespace DanielSpravtsev\BladeSchema;

use DanielSpravtsev\BladeSchema\Commands\BladeSchemaCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class BladeSchemaServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-blade-schema')
            ->hasConfigFile()
            ->hasViews('bladeschema')
            ->hasMigration('create_laravel-blade-schema_table')
            ->hasCommand(BladeSchemaCommand::class);
    }
}
