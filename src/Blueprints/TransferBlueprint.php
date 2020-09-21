<?php
namespace GetThingsDone\Warehouse\Blueprints;

use Illuminate\Database\Schema\Blueprint;

class TransferBlueprint extends Blueprint
{
    
    public static function defaultColumns($table)
    {
        $table->bigInteger('product_id');
        $table->bigInteger('coefficient')->default(1);
        $table->string('unit')->nullable();
        $table->bigInteger('quantity')->default(0);

        return $table;
    }
}