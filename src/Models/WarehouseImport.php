<?php
namespace GetThingsDone\Warehouse\Models;

use GetThingsDone\Warehouse\Models\Import;

class WarehouseImport extends Model
{
    public function imports()
    {
        return $this->morphMany(Import::class,'tranferable');
    }
    
    public function exports()
    {
        return $this->belongsToMany(WarehouseExport::class,'warehouse_transfer','import_id','export_id');
    }
}