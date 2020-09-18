<?php
namespace GetThingsDone\Warehouse\Models;

class Export extends Model
{
    protected $table = 'transfer';

    public function coefficient()
    {
        return -1;
    }
}