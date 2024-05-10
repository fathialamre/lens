<?php

namespace Lensphp\Lens;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LensServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('lens')
            ->hasInertiaComponents()
            ->hasRoutes('web')
            ->hasViews();
    }


}
