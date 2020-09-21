<?php

namespace GetThingsDone\Warehouse\Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;
use GetThingsDone\Warehouse\WarehouseServiceProvider;

abstract class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app)
    {
        return [WarehouseServiceProvider::class];
    }
}
