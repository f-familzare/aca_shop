<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable=['title','about'];

    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    public function permission()
    {
        return $this->belongsToMany(Permission::class);
    }

}
