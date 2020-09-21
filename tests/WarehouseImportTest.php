<?php
namespace GetThingsDone\Warehouse\Tests;

use GetThingsDone\Warehouse\Models\Product;
use GetThingsDone\Warehouse\Tests\TestCase;
use GetThingsDone\Warehouse\Models\Warehouse;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WarehouseImport extends TestCase
{
    use RefreshDatabase;

    public function setUp() : void
    {
        parent::setUp();
        Product::factory()->count(1000)->create();
        Warehouse::factory()->count(100)->create();
        
    }
}