<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = ['user_id',
        'country_id',
        'state_id',
        'city_id',
        'birthday_date',
        'address',
        'postal_code',
        'phone',
        'card_number'];

    public function country()
    {
        return $this->hasOne(Country::class,'country_id','id');
    }
    public function state()
    {
        return $this->hasOne(State::class,'state_id','id');
    }
    public function city()
    {
        return $this->hasOne(City::class,'city_id','id');
    }
}
