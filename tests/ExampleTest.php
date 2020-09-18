<?php

namespace GetThingsDone\Warehouse\Tests;

use Orchestra\Testbench\TestCase;
use GetThingsDone\Warehouse\WarehouseServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [WarehouseServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
