<?php



declare(strict_types=1);

namespace BrianFaust\Tests\Omnipay;

use BrianFaust\Omnipay\ServiceProvider;
use GrahamCampbell\TestBench\AbstractPackageTestCase;

abstract class AbstractTestCase extends AbstractPackageTestCase
{
    /**
     * Get the service provider class.
     *
     * @param \Illuminate\Contracts\Foundation\Application $app
     *
     * @return string
     */
    protected function getServiceProviderClass($app): string
    {
        return ServiceProvider::class;
    }
}
