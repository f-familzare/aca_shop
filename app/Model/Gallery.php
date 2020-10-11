<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable=['imgUrl'];

    public function product()
    {
        return $this->belongsToMany(Product::class);
    }
}
