<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $primaryKey='city_id';
    protected $fillable=['city_name'];

    public function account()
    {
        return $this->belongsTo(Account::class,'id','city_id');
    }

    public function state()
    {
        return $this->belongsTo(State::class,'state_id','city_id');
    }
}
