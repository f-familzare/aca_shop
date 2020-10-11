<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=['category_title','parent_id','imgUrl'];
//    protected $with=['sub_category'];
    public function category()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function sub_category()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function product()
    {
        return $this->hasMany(Product::class);
    }

    public function filter()
    {
        return $this->hasMany(Filter::class);
    }
}
