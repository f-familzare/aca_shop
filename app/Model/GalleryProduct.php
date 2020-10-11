<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class GalleryProduct extends Model
{
    protected $fillable=['gallery_id','product_id'];
    public $timestamps=false;
}
