<?php

namespace GetThingsDone\Warehouse;

use Illuminate\Support\Facades\Facade;

/**
 * @see \GetThingsDone\Warehouse\Skeleton\SkeletonClass
 */
class WarehouseFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'warehouse';
    }
}
