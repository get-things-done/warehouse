<?php
namespace GetThingsDone\Warehouse\Models;

use Illuminate\Database\Eloquent\Model;
use GetThingsDone\Warehouse\Contracts\Tranferable;
use GetThingsDone\Warehouse\Concerns\InteractsWithTranfer;

class Import extends Transfer
{
    protected $table = 'tranfers';
}