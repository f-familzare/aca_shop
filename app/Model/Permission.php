<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable=['permission_title','permission_label'];
    protected $with = 'role';
    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    public function role()
    {
        return $this->belongsToMany(Role::class);
    }
}
