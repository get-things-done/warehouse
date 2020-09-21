<?php
namespace GetThingsDone\Warehouse\Models;

class WarehouseExport extends Transfer
{
    public $attributes = [
        'coefficient' => -1
    ];
    
    public function imports()
    {
        return $this->belongsToMany(WarehouseImport::class,'warehouse_transfer','export_id','import_id');
    }
}