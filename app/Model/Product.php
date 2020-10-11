<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['title','category_id','imgUrl','count','price','brand','discount','status','description','user_id','special'];

    protected $with=['gallery'];
    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function gallery()
    {
        return $this->belongsToMany(Gallery::class);
    }

    public function cart()
    {
        return $this->belongsTo(Cart::class);
        //withPivot('unit_price','unit_offer','count')
    }
}
