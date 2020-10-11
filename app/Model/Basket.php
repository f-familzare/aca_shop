<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    protected $fillable=['user_id','total_price','count','total_offer','status'];

    public function product()
    {
        return $this->belongsToMany(Product::class)->withPivot('unit_price','unit_offer','count');
    }
}
