<?php
namespace GetThingsDone\Warehouse\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use GetThingsDone\Warehouse\Database\Factories\WarehouseFactory;

class Warehouse extends Model
{
    use HasFactory;

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return WarehouseFactory::new();
    }
}