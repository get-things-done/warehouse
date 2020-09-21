<?php
namespace GetThingsDone\Warehouse\Models;

use GetThingsDone\Warehouse\Models\Import;

class WarehouseImport extends Transfer
{
    
    
    public function exports()
    {
        return $this->belongsToMany(WarehouseExport::class,'warehouse_transfer','import_id','export_id');
    }
}