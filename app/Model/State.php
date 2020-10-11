<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $primaryKey='state_id';
    protected $fillable=['state_name'];

    public function account()
    {
        return $this->belongsTo(Account::class,'id','state_id');
    }

    public function country()
    {
        return $this->belongsTo(Country::class,'country_id','state_id');
    }
    public function city()
    {
        return $this->hasMany(City::class,'city_id','state_id');
    }
}
