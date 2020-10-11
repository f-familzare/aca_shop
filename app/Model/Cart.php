<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable=['product_id','user_id','count','total_price','total_discount','status'];
    public $timestamps=false;

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
