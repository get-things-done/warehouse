<?php
namespace GetThingsDone\Warehouse\Models;

class WarehouseExport extends Model
{
    public function exports()
    {
        return $this->morphMany(Export::class,'transferable');
    }

    public function imports()
    {
        return $this->belongsToMany(WarehouseImport::class,'warehouse_transfer','export_id','import_id');
    }
}