<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $primaryKey='country_id';
    protected $fillable=['country_name'];

    public function account()
    {
        return $this->belongsTo(Account::class,'id','country_id');
    }

    public function state()
    {
        return $this->hasMany(State::class,'state_id','country_id');
    }
}
