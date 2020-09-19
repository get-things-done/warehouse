<?php
namespace GetThingsDone\Warehouse\Models;

use Illuminate\Database\Eloquent\Model;

class Tranfer extends Model
{
    protected $fillable = [
        'transferable_id','transferable_type','warehouse_id','product_id','quantity'
    ];

    public $coefficient = 1;

    public function coefficient()
    {
        return $this->coefficient ?? 1;
    }

    public function setQuantityAttribute($value)
    {
        return $this->coefficient()*$value;
    } 

    public function getQuantityAttribute()
    {
        return $this->quantity/$this->coefficient();
    }

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