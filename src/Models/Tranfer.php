<?php
namespace GetThingsDone\Warehouse\Models;

use Illuminate\Database\Eloquent\Model;

class Tranfer extends Model
{
    protected $fillable = [
        'transferable_id','transferable_type','product_id','quantity'
    ];

    public function coefficient()
    {
        return 1;
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
}