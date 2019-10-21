<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $appends = ['isFavorited'];
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function community()
    {
        return $this->belongsTo(Community::class, 'city');
    }

    public function favorites()
    {
        return $this->morphMany(Favorite::class, 'favorited');
    }

    public function getIsFavoritedAttribute()
    {
        return !! $this->favorites()->where('user_id', auth()->id())->count();
        // is the property favorited
    }
}
