<?php
namespace GetThingsDone\Warehouse\Models;

use Illuminate\Database\Eloquent\Model;

class Tranfer extends Model
{
    protected $fillable = [
        'transferable_id','transferable_type','product_id','coefficient','quantity'
    ];

    /**
     * Get the owning tranferable model.
     */
    public function tranferable()
    {
        return $this->morphTo();
    }

    public function product()
    {
        return $this->beLongsTo(Product::class);
    }

    public function warehouse()
    {
        return $this->beLongsTo(Warehouse::class);
    }
}