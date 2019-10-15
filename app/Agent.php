<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    public function properties()
    {
        return $this->hasMany(Property::class);
    }

    public function broker()
    {
        return $this->belongsTo(Broker::class);
    }
}
