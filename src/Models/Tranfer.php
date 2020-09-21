<?php
namespace GetThingsDone\Warehouse\Models;

use Illuminate\Database\Eloquent\Model;

class Tranfer extends Model
{
    protected $fillable = [
        'product_id','coefficient','quantity'
    ];

    public function product()
    {
        return $this->beLongsTo(Product::class);
    }
}