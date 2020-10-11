<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CartProduct extends Model
{
    protected $fillable=['product_id','cart_id'];
    public $timestamps=false;
}
