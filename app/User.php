<?php

namespace App;

use App\Model\Cart;
use App\Model\Permission;
use App\Model\Role;
use App\Model\State;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'last_name', 'username', 'mobile', 'avatar', 'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function role()
    {
        return $this->belongsToMany(Role::class);
    }

    public function permission()
    {
        return $this->belongsToMany(Permission::class);
    }

    public function hasRole($role)
    {
        if (is_string($role)) {
            return $this->role->contains('title', $role);
        }
        foreach ($role as $r) {
            if ($this->hasRole($r->title)) {
                return true;
            }
        }
        return false;
    }

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }
}
