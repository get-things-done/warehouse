<?php
namespace GetThingsDone\Warehouse\Models;

class WarehouseExport extends Model
{
    public function exports()
    {
        return $this->morphMany(Export::class,'transferable');
    }
}