<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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

    public function favorites()
    {
        return $this->belongsToMany(Property::class, 'favorites', 'user_id', 'favorited_id');
        // eloquent will assume property_user, but we override with favorites on our user_id and it's property_id
        // User may have many Properties on Favorites on User_id to Property_id
    }

    public function properties()
    {
        return $this->hasMany(Property::class, 'user_id');
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    //public function authorizeRoles($roles)
    //{
    //    if (is_array($roles)) {
    //        return $this->hasAnyRole($roles) || 
    //                abort(401, 'This action is unauthorized.');
    //    }
    //    return $this->hasRole($roles) || 
    //            abort(401, 'This action is unauthorized.');
    //}
    //public function hasAnyRole($roles)
    //{
    //    return null !== $this->roles()->whereIn('name', $roles)->first();
    //}
    //public function hasRole($role) 
    //{
    //    return null !== $this->roles()->where('name', $role)->first();
    //}
}
