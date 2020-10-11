<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Filter extends Model
{
    protected $fillable = ['category_id', 'parent_id', 'title_fa', 'title_en', 'type'];
    protected $with = ['sub_filter', 'category'];

    public function filter()
    {
        return $this->hasMany(Filter::class, 'parent_id');
    }

    public function sub_filter()
    {
        return $this->belongsTo(Filter::class, 'parent_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
