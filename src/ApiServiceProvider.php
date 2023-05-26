<?php

namespace Techsoft\Api;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Techsoft\Api\Commands\ApiCommand;

class ApiServiceProvider extends PackageServiceProvider
{

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('api')
            ->hasRoute('web');
    }
}
