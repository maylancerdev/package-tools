<?php

use function PHPUnit\Framework\assertFileExists;
use Spatie\LaravelPackageTools\Package;

trait ConfigurePackageAssetsTest
{
    public function configurePackage(Package $package)
    {
        $package
            ->name('laravel-package-tools')
            ->hasAssets();
    }
}

uses(ConfigurePackageAssetsTest::class);

it('can publish the assets', function () {
    $this
        ->artisan('vendor:publish --tag=package-tools-assets')
        ->assertExitCode(0);

    assertFileExists(public_path('vendor/package-tools/dummy.js'));
});
